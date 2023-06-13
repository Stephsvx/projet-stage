<?php
// Récupérez les données du formulaire
$destinataire = $_POST['destinataire'];
$message = $_POST['message-to-send'];
$expediteur = "Votre ID d'utilisateur"; // Mettez ici l'ID de l'expéditeur, vous pouvez le récupérer depuis votre système de connexion

// Connexion à la base de données
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "liteechat";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Préparez et exécutez la requête SQL pour insérer le message dans la table "messages"
$sql = "INSERT INTO messages (id_expediteur, id_destinataire, message) VALUES ('$expediteur', '$destinataire', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Le message a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi du message : " . $conn->error;
}

// Fermez la connexion à la base de données
$conn->close();
?>