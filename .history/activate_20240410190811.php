<?php
//Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Afpa1234';
$DATABASE_NAME = 'the_district';
//Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// First we check if the email and code exists...
if (isset($_GET['email'], $_GET['code'])) {
	if ($stmt = $con->prepare('SELECT * FROM accounts WHERE email = ? AND activation_code = ?')) {
		$stmt->bind_param('ss', $_GET['email'], $_GET['code']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			// Account exists with the requested email and code.
			if ($stmt = $con->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?')) {
				// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
				$newcode = 'activated';
				$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
				$stmt->execute();
				echo 'Your account is now activated! You can now <a href="commande.php">login</a>!';
			}
		} else {
			echo 'The account is already activated or doesn\'t exist!';
		}
	}
}
?>

// 
// CREATE TABLE `comptes_definitifs` (
// 	`id` smallint(6) NOT NULL auto_increment,
// 	`pseudo` tinytext NOT NULL,
// 	`password` tinytext NOT NULL,
// 	`mail` tinytext NOT NULL,
// 	`newsletter` tinytext NOT NULL,
// 	`pays` tinytext NOT NULL,
// 	`ville` tinytext NOT NULL,
// 	`sexe` tinytext NOT NULL,
// 	`date_naissance` tinytext NOT NULL,
// 	KEY `id` (`id`)
//   ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
  

  

  
//   CREATE TABLE `comptes_provisoirs` (
// 	`id` smallint(6) NOT NULL auto_increment,
// 	`pseudo` tinytext NOT NULL,
// 	`password` tinytext NOT NULL,
// 	`mail` tinytext NOT NULL,
// 	`newsletter` tinytext NOT NULL,
// 	`pays` tinytext NOT NULL,
// 	`ville` tinytext NOT NULL,
// 	`sexe` tinytext NOT NULL,
// 	`date_naissance` tinytext NOT NULL,
// 	`clef` smallint(10) NOT NULL default '0',
// 	KEY `id` (`id`),
//   ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
  

