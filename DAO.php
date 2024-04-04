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


require_once('classes/classe_cat.php');
require_once('classes/classe_plat.php');

function get_categorie($id) {
   
    $conn = connect_database();
    $requete = $conn->prepare("SELECT * FROM categorie WHERE id = :id");
    $requete->bindParam(':id', $id);
    $requete->execute();
    $categorie = $requete->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
   
    return $categorie;
}

function get_categories($conn) {
    $cat_index = $conn->prepare("SELECT DISTINCT categorie.* 
    FROM categorie
    JOIN plat ON plat.id_categorie = categorie.id
    JOIN commande ON commande.id_plat = plat.id");
    $cat_index->execute();
    return $cat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
}

function get_index_page($conn){
    $categories_result = $conn->prepare("SELECT  id, libelle, image
    FROM categorie 
    WHERE active = 'Yes'");
    $categories_result->execute();
    return $categories_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
}

function get_cat_page($conn){
    $categories_result = $conn->prepare("SELECT  id, libelle , image 
    FROM categorie 
    WHERE active = 'Yes'");
    $categories_result->execute();
    return $categories_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
}

function get_plat_index($conn) {
    $plat_index = $conn->prepare("SELECT DISTINCT  p.*
    FROM categorie cat
    JOIN plat p ON p.id_categorie = cat.id
    JOIN commande com ON com.id_plat = p.id
    WHERE com.quantite > 2
    AND com.etat != 'Annulée'");
    $plat_index->execute();
    return $plat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");
}


function get_plat($conn, $id) {
    $requete = $conn->prepare('SELECT libelle, prix FROM plat WHERE id = :id');
    $requete->bindParam(':id', $id);
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Plat');
}

// Récupération des plats pour une catégorie spécifique
function get_plat_cat($conn, $plat_cat_id) {
    $plat_cat_result = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
    $plat_cat_result->bindParam(':id_categorie', $plat_cat_id);
    $plat_cat_result->execute();
    return $plat_cat_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");
}

// Récupération de tous les plats
function get_plat_page($conn) {
    $plats_result = $conn->prepare("SELECT plat.id, plat.libelle, plat.image, description, prix, id_categorie FROM plat");
    $plats_result->execute();
    return $plats_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

}

// Récupération des détails d'un plat pour une commande spécifique
function get_plat_commande($conn, $plat_id) {
    $plat_commande_result = $conn->prepare("SELECT * FROM plat WHERE id = :id");
    $plat_commande_result->bindParam(':id', $plat_id);
    $plat_commande_result->execute();
    return $plat_commande_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");
}




// Requête pour obtenir les catégories actives à afficher sur la page d'index
$index_page = $conn->prepare("SELECT id, libelle, image, active
FROM categorie
WHERE active = 'Yes'
LIMIT 5");




// Requête pour obtenir toutes les catégories et leurs images
$cat_page = $conn->prepare("SELECT  id, libelle , image
FROM categorie 
");

// Requête pour obtenir les plats qui ont été commandés plus de deux fois et qui n'ont pas été annulés
$plat_index = $conn->prepare("SELECT DISTINCT  p.*
 FROM categorie cat
 JOIN plat p ON p.id_categorie = cat.id
 JOIN commande com ON com.id_plat = p.id
 WHERE com.quantite > 2
 AND com.etat != 'Annulée'");


$plat_page =$conn->prepare("SELECT plat.*
FROM plat
JOIN categorie ON categorie.id = plat.id_categorie");


$cat_plat =$conn->prepare("SELECT *
FROM plat
WHERE id_categorie = :id_categorie");