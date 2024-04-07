<?php
   
$Currentpage = basename($_SERVER['PHP_SELF']);

$conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // Inclusion du fichier DAO pour accéder à la base de données
require_once('./DAO.php');

// Récupérer le terme de recherche de l'utilisateur
$searchTerm = $_GET['searchTerm'];


// Requête SQL pour rechercher dans les plats
$sqlPlats = $conn->prepare("SELECT * FROM plat WHERE libelle LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%'");
$sqlPlats->execute();
$plats = $sqlPlats->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");


// Afficher les résultats de la recherche
echo "<h2>Résultats de la recherche pour : $searchTerm</h2>";

// Afficher les plats correspondants
foreach($plats as $plat) {
    
    echo"<div class='container-fluid card-index d-flex col-8 '>
    <h3>Plats :</h3>;
    <p>$plat->libelle</p>
    <img class='img-fluid col-4  justify-content-center d_flex mx-auto' src ='$plat->image'>
    </div>";
}




