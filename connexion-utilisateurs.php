<?php
// Vérifier si le formulaire de connexion est soumis
if (isset($_POST['login'])) {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "liteechat";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête pour récupérer les informations de l'utilisateur
    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Utilisateur trouvé, vérification du mot de passe
        $row = $result->fetch_assoc();
        if (password_verify($motdepasse, $row['motdepasse'])) {
            // Mot de passe correct, connecter l'utilisateur
            // Vous pouvez ajouter les actions nécessaires ici, par exemple définir des variables de session, etc.
            echo "Connexion réussie !";
            header("Location: index.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Utilisateur non trouvé.";
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>

