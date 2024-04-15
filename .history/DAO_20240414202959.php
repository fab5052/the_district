<?php

require_once('classes/classe_cat.php');
require_once('classes/classe_plat.php');

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

// function executeRequete($req)
// {
//     global $mysqli;
//     $resultat = $mysqli->query($req);
//     if(!$resultat)
//     {
//         die("Erreur sur la requete sql.<br>Message : " . $mysqli->error . "<br>Code: " . $req);
//     }
//     return $resultat;
// }
// //------------------------------------
// function debug($var, $mode = 1)
// {
//     echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
//     $trace = debug_backtrace();
//     $trace = array_shift($trace);
//     echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
//     if($mode === 1)
//     {
//         print '<pre>'; print_r($var); print '</pre>';
//     }
//     else
//     {
//         print '<pre>'; var_dump($var); print '</pre>';
//     }
//     echo '</div>';
//}
//------------------------------------
// function userConnecter()
// { 
//     if(!isset($_SESSION['loggedin'])) return false;
//     else return true;
// }
// //------------------------------------
// function userConnecterAdmin()
// {
//     if(userConnecterAdmin() && $_SESSION['loggedin']['statut'] == 1) return true;
//     else return false;
// }


function get_categories($conn) {
    $cat_index = $conn->prepare("SELECT DISTINCT categorie.* 
    FROM categorie
    JOIN plat ON plat.id_categorie = categorie.id
    JOIN commande ON commande.id_plat = plat.id");
    $cat_index->execute();
    return $cat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
}

function get_categorie($id) {
    $conn = connect_database();
    $requete = $conn->prepare("SELECT * FROM categorie WHERE id = :id");
    $requete->bindParam(':id', $id);
    $requete->execute();
    $categorie = $requete->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");
    return $categorie;
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

function get_index_page($conn){
    $categories_result = $conn->prepare("SELECT  id, libelle, image
    FROM categorie 
    WHERE active = 'Yes'
    LIMIT  5 ");
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


// Récupération de tous les plats
function get_plat_page($conn) {
    $plats_result = $conn->prepare("SELECT plat.id, plat.libelle, plat.image, description, prix, id_categorie FROM plat");
    $plats_result->execute();
    return $plats_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");

}

// Récupération des plats pour une catégorie spécifique
function get_plat_cat($conn, $plat_cat_id) {
    $plat_cat_result = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
    $plat_cat_result->bindParam(':id_categorie', $plat_cat_id);
    $plat_cat_result->execute();
    return $plat_cat_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");
}

// Récupération des détails d'un plat pour une commande spécifique
function get_plat_commande($conn, $plat_id) {
    $plat_commande_result = $conn->prepare("SELECT * FROM plat WHERE id = :id");
    $plat_commande_result->bindParam(':id', $plat_id);
    $plat_commande_result->execute();
    return $plat_commande_result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");
}

function userConnecter()
{ 
    if(!isset($_SESSION['loggedin'])) return false;
    else return true;
}
//------------------------------------
function userConnecterAdmin()
{
    if(userConnecterAdmin() && $_SESSION['loggedin']['statut'] == 1) return true;
    else return false;
}
//------------------------------------
function creationPanier()
{
   if(!isset($_SESSION['panier']))
   {
      $_SESSION['panier'] = array();
      $_SESSION['panier']['libelle'] = array();
      $_SESSION['panier']['id_plat'] = array();
      $_SESSION['panier']['quantite'] = array();
      $_SESSION['panier']['prix'] = array();
   }
}
//------------------------------------
function ajouterPlatPanier($id_plat, $libelle, $quantite, $prix)
{
    creationPanier(); 
    $position_plat = array_search($id_plat,  $_SESSION['panier']['id_plat']);
    if($position_plat !== false)
    {
         $_SESSION['panier']['quantite'][$position_plat] += $quantite ;
    }
    else
    {
        $_SESSION['panier']['id_plat'][] = $id_plat;
        $_SESSION['panier']['libelle'][] = $libelle;
        $_SESSION['panier']['quantite'][] = $quantite;
        $_SESSION['panier']['prix'][] = $prix;
    }
}

