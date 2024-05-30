<?php
function DisplayEnvoi()
{
    include "correct.php";
}

function envoyerEmail($objet, $email, $message)
{
    // Vérification des données pour éviter les injections
    $objet = htmlspecialchars($objet);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    $sujet = "Nouveau message de contact";
    $contenu = "Objet: $objet\n";
    $contenu .= "E-mail: $email\n";
    $contenu .= "Message:\n$message";

    $destinataire = "fabnino51@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
        DisplayEnvoi();
    } else {
        echo "Erreur lors de l'envoi de l'e-mail";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $objet = $_POST["objet"];
    $objet = $_POST["email"];
    $objet = $_POST["message"];

    envoyerEmail($objet, $email, $message);
}
