<?php
function connect_database () {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=the_district", "admin", "Afpa1234");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}

$conn = connect_database();


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
