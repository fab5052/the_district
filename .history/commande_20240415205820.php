<?php

require_once('header.php');



// $conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once('./DAO.php');
session_start();
if(!isset($_SESSION['panier']));
// {
//    $_SESSION['panier'] = array();
//    $_SESSION['panier']['libelle'] = array();
//    $_SESSION['panier']['id_plat'] = array();
//    $_SESSION['panier']['quantite'] = array();
//    $_SESSION['panier']['prix'] = array();
// }
$conn->lastInsertId();

// Inclusion du fichier DAO pour accéder à la base de données


// Si des paramètres sont passés dans l'URL, afficher la page de recherche

// Vérification de la requête et inclusion de la vue de recherche si nécessaire




// // $plat_id = isset($_SESSION['panier']) ? $_SESSION['panier'] : null;
// $conn->lastInsertId();





// Inclusion du fichier DAO pour accéder à la base de données




// $conn = $pdo->prepare('SELECT * FROM plat WHERE id = ?');




// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

?>


  

<?php
require_once('header.php');
?>

<div class="parallax">
    <main class="main-content">
        <section>
            <div class="container-fluid top-30 col-4 justify-content-center align-items-center position-relative mx-auto top-40">
                <h1>Passer votre commande</h1>
                <input value="<?= $plat_id ?>"> 
                <form action="mailing/analyse_commande.php" method="post" id="validate" aria-required="false">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur :</label>
                        <input id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse :</label>
                        <textarea type="text" id="address" name="address" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">Numéro de téléphone :</label>
                        <input id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité :</label>
                        <input type="number" id="quantite" name="quantite" class="form-control" min="1" value="1" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Valider la commande</button>
                </form>
            </div>
        </section>


<?php
require_once('view/view_plat_page.php');
?>
    </main>
</div>

<?php
require_once('footer.php');
?>
