<?php



// if(!isset($_SESSION['panier'])); 
// $stmt = $pdo->prepare('SELECT * FROM accounts WHERE id = ?');
// $stmt->execute([ $_SESSION['id'] ]);
// $account = $stmt->fetch(PDO::FETCH_ASSOC);
// $plat_id = isset($_SESSION['panier']) ? $_SESSION['panier'] : null;

// $Currentpage = basename($_SERVER['PHP_SELF']);



// Inclusion du fichier DAO pour accéder à la base de données


// $pdo = new PDO(...);



$conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');


 // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté 
 if (!isset($_SESSION['loggedin'])) { 
    header('Location: login.php');
}


session_start();
if (!isset($_SESSION['panier'])) {
    $conn->lastInsertId();

// if ($account['activation_code'] == 'activated') {
//     session_start(); 
// 	// account is activated
// 	// Display home page etc
// } else {
// 	// account is not activated

  

 }; 
 
 require_once('./DAO.php');
 require_once('view/view_plat_page.php');
?>

<?php
require_once('header.php');
?>

<div class="parallax">
    <main class="main-content">
        <section>
            <div class="container-fluid top-30 col-4 justify-content-center align-items-center position-relative mx-auto top-40">
                <h1>Passer votre commande</h1>
                <input name="id" value="<?= $plat_id ?>" hidden>
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
    </main>
</div>

<?php
require_once('footer.php');
?>
