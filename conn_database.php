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
