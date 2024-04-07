<?php

function connect_database () {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=the_district", "admin", "Afpa1234");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();

        echo "Connecté à la base de données:<br>";
        return $conn;
    } catch (Exception $e) {
        echo "Erreur : " .$e->getMessage() . "<br>";
        echo "N° :" .$e->getCode();
        die("Fin du script");
    }
}
$plat_page->execute();
$plats = $plat_page->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

if (in_array($Currentpage, $array_plat)) {
echo "<div class='col-8 mx-auto'>";
foreach ($plats as $plat) {
    echo "<div class='card-plat col-md-6 d-block position-relative  justify-content-around '>";
    $plat->afficher_plat_page();
     echo "<br>"."</div>";
}
echo "</div>";
}