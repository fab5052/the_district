<?php


$Currentpage = basename($_SERVER['PHP_SELF']);

$conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inclusion du fichier DAO pour accéder à la base de données
require_once('DAO.php');

// Si des paramètres sont passés dans l'URL, afficher la page de recherche

// Vérification de la requête et inclusion de la vue de recherche si nécessaire
if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != "") {
    require_once('view/view_search.php');
}

// Si la page actuelle est l'index, affichage des catégories et des plats les plus vendus
if ($Currentpage == "index.php") {
      // Récupération des catégories et affichage
    $index_page = get_index_page($conn);
    echo "<h1 class='d-flex justify-content-center pt-8'>BEST-SELLERS</h1>
          <div  class='container-fluid ul d-flex w-80 mx-auto justify-content-center'>";
    foreach ($index_page as $categorie) {
     echo "<div class='li '>" ;
        $categorie->afficher_index_page();
        echo "<br>" . "</div>";
    }
    echo "</div>";

    // Récupération et affichage des plats les plus vendus
    $plats_index = get_plat_index($conn);
    echo "<h2 class='d-flex position-relative justify-content-center mt-4 pt-4'>Nos clients en raffolent !!</h2>
          <div class='container-fluid row col-4 d-flex m-0'>";
    foreach ($plats_index as $plat) {
        echo "<div  class='card-plat  justify-content-center position-relative '>";
        $plat->afficher_plat_index();
        echo "<br>" . "</div>";
    }
    echo "</div>";
}

// Si la page actuelle est la page de catégorie, afficher les catégories disponibles
if ($Currentpage == "categorie.php")  {
  $categories = get_cat_page($conn);
  echo "<div class='accordion-group'>";
  foreach ($categories as $categorie) {
  echo "<li class='row mx-auto ' >";
  $categorie->afficher_cat_page();
  echo "</li>";
  }
  echo "</div>";
}