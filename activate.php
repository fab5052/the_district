<?php 
// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'admin';
// $DATABASE_PASS = 'Afpa1234';
// $DATABASE_NAME = 'the_district';
// // Try and connect using the info above.
// $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// if (mysqli_connect_errno()) {
// 	// If there is an error with the connection, stop the script and display the error.
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }


use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

// Inclure la classe PHPMailer
require '../vendor/autoload.php';

// Créer une instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP (MailHog)
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025; // Port par défaut de MailHog

    // Destinataire
    $mail->setFrom('thedistrict@mail.com', 'Expediteur');
    $mail->addAddress('jimjag@gmail.com', 'Destinataire');

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Account Activation Required';
    $mail->Body = $content_contact;
        

    // Envoyer l'email
    $mail->send();
    echo 'Email envoyé avec succès!';
    header ('Location: ../index.php');
    
} catch (Exception $e) {
    echo "Une erreur s'est produite lors de l'envoi de l'email : {$mail->ErrorInfo}";
}



// First we check if the email and code exists...
if (isset($_GET['email'], $_GET['code'])) {
	if ($stmt = $conn->prepare('SELECT * FROM accounts WHERE email = ? AND activation_code = ?')) {
		$stmt->bind_param('ss', $_GET['email'], $_GET['code']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			// Account exists with the requested email and code.
			if ($stmt = $conn->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?')) {
				// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
				$newcode = 'activated';
				$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
				$stmt->execute();
				echo 'Your account is now activated! You can now <a href="index.php">login</a>!';
			}
		} else {
			echo 'The account is already activated or doesn\'t exist!';
			header('Location: ./login.html');
		}
	}
} 
