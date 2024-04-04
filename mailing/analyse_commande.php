<?php

require_once ("../DAO.php");

$errors = [];

// Vérification des champs
if (empty($_POST['username'])) {
    $errors['username'] = "Le champ Nom d'utilsateur est obligatoire.";
}

if (empty($_POST['email'])) {
    $errors['email'] = "Le champ Email est obligatoire.";
}

if (empty($_POST['address'])) {
    $errors['address'] = "Le champ Adresse est obligatoire.";
}

if (empty($_POST['phone'])) {
    $errors['phone'] = "Le champ Téléphone est obligatoire.";
}

// Affichage des erreurs ou traitement des données valides
if (!empty($errors)) {
    // Afficher les erreurs
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    // Les données sont valides, vous pouvez faire ce que vous voulez avec elles

    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];
   
    $plat = get_plat($conn, $id)[0];

    $libelle = $plat->getLibelle();
    $prix = $plat->getPrix();


    // Création du contenu à écrire dans le fichier
    $content = " $username \n Votre adresse de livraison :\n $address\n Votre mode de contact: $phone\n\n Vous avez choisi :\n $libelle - $prix €\n ";

    // Chemin du fichier où enregistrer les données du formulaire
    

    // Écriture des données dans le fichier
    if (file_put_contents( $content, FILE_APPEND | LOCK_EX) !== false) {
        require_once('mailing/commandes_mail.php');
        
        echo"Ce formulaire a bien été envoyé ";
    } else {
        echo "<p>Erreur lors de l'enregistrement de la commande dans le fichier.</p>";
    }
    
}


