<?php
// Connexion à la base de données
$conn = new PDO("mysql:host=hostname;dbname=nom_de_la_base_de_donnees", 'utilisateur', 'mot_de_passe');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupérer le terme de recherche de l'utilisateur
if(isset($_GET['searchTerm'])) {
    $searchTerm = htmlspecialchars($_GET['searchTerm']);

    // Requête SQL pour rechercher dans les plats
    $sqlPlats = $conn->prepare("SELECT * FROM plat WHERE libelle LIKE :searchTerm OR description LIKE :searchTerm");
    $sqlPlats->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $sqlPlats->execute();
    $plats = $sqlPlats->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les résultats de la recherche
    echo "<h2>Résultats de la recherche pour : $searchTerm</h2>";

    // Afficher les plats correspondants
    foreach($plats as $plat) {
        echo "<div class='card'>";
        echo "<h3>Plats :</h3>";
        echo "<p>{$plat['libelle']}</p>";
        echo "<img class='img-fluid col-4 justify-content-center d-flex mx-auto' src='{$plat['image']}'>";
        echo "</div>";
    }
} else {
    echo "Vous devez définir un terme de recherche !";
}
?>
