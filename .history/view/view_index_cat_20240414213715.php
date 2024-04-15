<?php


$Currentpage = basename($_SERVER['PHP_SELF']);

$conn = new PDO("mysql:host=localhost;dbname=the_district", 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inclusion du fichier DAO pour accéder à la base de données
require_once('./DAO.php');

// Si des paramètres sont passés dans l'URL, afficher la page de recherche

// Vérification de la requête et inclusion de la vue de recherche si nécessaire
if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != "") {
    require_once('view/view_search.php');
}

// Si la page actuelle est l'index, affichage des catégories et des plats les plus vendus
if ($Currentpage == "index.php") {
      // Récupération des catégories et affichage
    $index_page = get_index_page($conn);
    echo "<h2>BEST-SELLERS</h2>
          <div  class='ul mb--6 d-flex w-100 mx-auto justify-content-center'>";
    foreach ($index_page as $categorie) {
     echo "<div class='li'>" ;
        $categorie->afficher_index_page();
        echo "<br>" . "</div>";
    }
    echo "</div>";

    // Récupération et affichage des plats les plus vendus
    $plats_index = get_plat_index($conn);
    echo "<hr><h1 class=' d-flex position-relative justify-content-center'>Nos clients en raffolent !!</h1>
          <div class='row container-fluid pt-4 ml-4 p-0 '>";
    foreach ($plats_index as $plat) {
        echo "<div  class='card-index col-md-4 mx-auto justify-content-center justify-align-items-center  position-relative '>";
        $plat->afficher_plat_index();
        echo "<br>" . "</div>";
    }
    echo "</div>";
}

// Si la page actuelle est la page de catégorie, afficher les catégories disponibles
if ($Currentpage == "categorie.php")  {
  $categories = get_cat_page($conn);
  echo "<h2></h2>
  <div class='ul'>";
  foreach ($categories as $categorie) {
  echo "<li >";
  $categorie->afficher_cat_page();
  echo "</li>";
  }
  echo "</div>";

  if(isset($_GET['id'])) {
    $plat_cat_id = $_GET['id'];
    // Récupération des plats de la catégorie et affichage
    $plats_cat = get_plat_cat($conn, $plat_cat_id);
    if (!empty($plats_cat)) {
        foreach ($plats_cat as $plat) {
            $plat->afficher_plat_cat();
        }
        
    } else {
        echo "Aucun plat trouvé pour cette catégorie.";
    }
} else {
    echo "Aucune catégorie spécifiée.";
} echo "</div>";

}