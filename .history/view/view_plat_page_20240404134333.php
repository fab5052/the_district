<?php
$array_plat = array("plat.php");
$array_cat_plat = array("plat_cat.php");

$Currentpage = basename($_SERVER['PHP_SELF']);


$conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inclusion du script DAO pour les requêtes


require_once('DAO.php');


$plat_page->execute();
$plats = $plat_page->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

if (in_array($Currentpage, $array_plat)) {
echo "<div class='col-lg-4 mx-auto'>";
foreach ($plats as $plat) {
    echo "<div class='card-plat  d-block position-relative  justify-content-around '>";
    $plat->afficher_plat_page();
     echo "<br>"."</div>";
}
echo "</div>";
}

// if(isset($_GET['id'])) {
//     // Récupérer l'ID de la catégorie depuis l'URL
//     $id_categorie = $_GET['id'];

// $cat_plat = $conn->execute();
// $plats_cat = $cat_plat->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

// if (in_array($Currentpage, $array_cat_plat)) {

// foreach ($plat_cat as $plat) {
//     $plat->afficher_plat_cat();
// }

// } else {
//     // Si aucun ID de catégorie n'est spécifié dans l'URL, afficher un message d'erreur
//     echo "Aucune catégorie spécifiée.";
// }
    
// }

if(isset($_GET['id'])) {
    // Récupérer l'ID de la catégorie depuis l'URL
    $id_categorie = $_GET['id'];

    // Exécuter la requête pour récupérer les plats de la catégorie spécifiée
   
    $cat_plat->execute(array('id_categorie' => $id_categorie));

    // Récupérer les résultats de la requête sous forme d'objets Plat
    $plats_cat = $cat_plat->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

    // Vérifier s'il y a des plats dans cette catégorie
    if (!empty($plats_cat)) {
        // Afficher les plats de la catégorie
        foreach ($plats_cat as $plat) {
            $plat->afficher_plat_cat();
        }
    } else {
        // Si aucun plat n'est trouvé pour cette catégorie, afficher un message d'erreur
        echo "Aucun plat trouvé pour cette catégorie.";
    }
} else {
    // Si aucun ID de catégorie n'est spécifié dans l'URL, afficher un message d'erreur
    echo "Aucune catégorie spécifiée.";


    
}

require_once('classes/classe_cat.php');
require_once('classes/classe_plat.php');