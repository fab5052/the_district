<?php 
$array_plat = array("plat.php");
$array_cat_plat = array("plat_cat.php");


require_once('header.php');

?>

<?php 

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}


?>


<?php
require_once('view/view_plat_page.php');

?>
 
 
 <div class="parallax">

<main class="main-content  ">


<section>
    <div class="container-fluid col-4 justify-content-center align-items-center position-relative mx-auto top-40">

    <input name="id" value='<?= $plat_id ?>' hidden>

        <h1>Passer votre commande</h1>
        <form action="mailing/analyse_commande.php" method="post"  id="validate" aria-required="false">
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
                <input id="phone" name="phone" class="form-control" required></input>
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
