<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure la classe PHPMailer
require_once './vendor/autoload.php';

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Afpa1234';
$DATABASE_NAME = 'the_district';

// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

session_start();

// Now we check if the data was submitted, isset() function will check if the data exists.
if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'],  $_POST['email'])) {
	// Make sure the submitted registration values are not empty.
	if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm_password']) || empty($_POST['email'])) {
		// One or more values are empty.
		exit('Please complete the registration form');
	}

	if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
		exit('Username is not valid!');
	}

	if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
		exit('Password must be between 5 and 20 characters long!');
	}

	if (strlen($_POST['confirm_password']) > 20 || strlen($_POST['confirm_password']) < 5) {
		exit('Password must be between 5 and 20 characters long!');
	}

    if ($_POST['password'] != $_POST['confirm_password']) {
        echo 'Mauvais pass<br/>';
    }

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		exit('Email is not valid!');
	}

	// We need to check if the account with that username exists.
	$stmt = $conn->prepare('SELECT id FROM accounts WHERE username = ?');
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		// Username already exists
		exit('Username exists, please choose another!');
	}


	// Username doesn't exists, insert new account
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$activation_code = uniqid();
	$stmt = $conn->prepare('INSERT INTO accounts (username, password,  email, activation_code) VALUES (?, ?, ?, ?)');
	$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $activation_code);
	$stmt->execute();
	

	// Send activation email
	$mail = new PHPMailer(true);
	try {
		// Paramètres du serveur SMTP (MailHog)
		$mail->isSMTP();
		$mail->Host = 'localhost';
		$mail->Port = 1025; // Port par défaut de MailHog

		// Destinataire
		$mail->setFrom('thedistrict@mail.com', 'Expediteur');
		$mail->addAddress($_POST['email'], $_POST['username']); // Adresse email du destinataire et nom du destinataire

		// Contenu du message
		$mail->isHTML(true);
		$mail->Subject = 'Account Activation Required';
		$activate_link = '@the_district/login.php?email=' . $_POST['email'] . '&code=' . $activation_code;
		$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
		$mail->Body = $message;

		// Envoyer l'e-mail
		$mail->send();
		echo 'Please check your email to activate your account!';

		exit(); // Terminer le script après la redirection
	} catch (Exception $e) {
		echo "Une erreur s'est produite lors de l'envoi de l'email : {$mail->ErrorInfo}";
	}
	if (isset($_GET['email'], $_GET['code'])) {
		// Activation code provided, proceed with activation
		$stmt = $conn->prepare('SELECT id FROM accounts WHERE email = ? AND activation_code = ?');
		$stmt->bind_param('ss', $_GET['email'], $_GET['code']);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			// Account exists with the requested email and code.
			$stmt = $conn->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?');
			$newcode = 'activated';
			$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
			$stmt->execute();
			$stmt->close();
	
			// Check if the update was successful
			if ($stmt->affected_rows > 0) {
				echo 'Your account is now activated!';
			} else {
				echo 'Failed to activate your account. Please try again later.';
			}
		} else {
			echo 'The account is already activated or doesn\'t exist!';
		}
	}
	
	$conn->close();
