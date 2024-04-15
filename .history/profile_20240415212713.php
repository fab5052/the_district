<?php

require_once('header.php');


session_start();

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'admin';
// $DATABASE_PASS = 'Afpa1234';
// $DATABASE_NAME = 'the_district';
// $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// if (mysqli_connect_errno()) {
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
// $stmt = $conn->prepare('SELECT password, email FROM accounts WHERE id = ?');
// // In this case we can use the account ID to get the account info.
// $stmt->bind_param('i', $_SESSION['id']);
// $stmt->execute();
// $stmt->bind_result($password, $email);
// $stmt->fetch();
// $stmt->close();
?>


<div class="parallax">

<main class="main-content h-100 top-40">


  <h1 class="p-4">
    <i class="neon-red">Votre</i>
    <i class="neon-blue">compte</i>
  </h1>



<div class="  container-fluid  col-md-6 d-block justify-content-center align-items-center mt-40">

<h2>Nous sommes ravies de vous revoir !</h2>


    <fieldset>
    <table class="xe-uncaught-exception" dir="ltr" border="1" cellspacing="1" cellpadding="1">
            <thead>
                <tr>
                <td align="center" bgcolor="#7c95c5" colspan="2"><span>DETAILS</span></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="left" bgcolor="#c88e19">Nom d'utilisateur:</td>

                    <td align="center" bgcolor="#eeeeec"><?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?></td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#c88e19">Mot de passe:</td>
                    <td align="center" bgcolor="#eeeeec"><?= isset($password) ? htmlspecialchars($password) : '' ?></td>
                </tr>
                <tr>
                <td align="left" bgcolor="#c88e19">Email:</td>
                    <td align="center" bgcolor="#eeeeec"><?= isset($email) ? htmlspecialchars($email) : '' ?></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</div>



</main>
</div>




<?php
// // Vérifier si les détails de la commande sont disponibles dans la session //
// if(isset($_SESSION['details_commande'])) {
//   $details_commande = $_SESSION['details_commande'];
//   $user  = $_SESSION['profile'];
//   echo '<h1>Nous sommes content de vous revoir '. $user['username'] . '</h1>';
//   echo '<h4>Vos informations</h4>';
//   echo '<p>Utilisateur ' . $username['username'] . '</p>';
//   echo '<p>Email: ' . $user['email'] . '</p>';
 





//  echo '<p>Adresse: ' . $details_commande[0]['adresse_client'] . '</p>';
//   echo '<p>Téléphone: ' . $details_commande[0]['telephone_client'] . '</p>';
//   // Afficher les détails des plats
//   foreach($details_commande as $detail) {
//       echo '<h2> Vous avez passez commande le : '.$detail['date_commande'].'</h2>';
//       echo '<p> Vous avez commandé : '.$detail['libelle_plat']. " En Quantité :".$detail['quantite'].'</p>';
//      echo '<p> le total de la comande est de :' .$detail['total']. " €</p>";
//   }
// } else {
//   echo 'Aucun détail de commande trouvé.';
// }


// ?>




<?php

require_once('footer.php');


?>