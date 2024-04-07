<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure la classe PHPMailer
require '../vendor/autoload.php';

// Créer une instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP (MailHog)
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025; // Port par défaut de MailHog

    // Destinataire
    $mail->setFrom('thedistrict@mail.com', 'Expediteur');
    $mail->addAddress('jimjag@gmail.com', 'Destinataire');

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Formulaire de contact ';
    $mail->Body = $content_contact;
        

    // Envoyer l'email
    $mail->send();
    echo 'Email envoyé avec succès!';
    header ('Location: ../index.php');
    
} catch (Exception $e) {
    echo "Une erreur s'est produite lors de l'envoi de l'email : {$mail->ErrorInfo}";
}

