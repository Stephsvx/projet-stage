<?php
// Vérifier si le formulaire d'inscription est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

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

    // Requête d'insertion des données dans la table "utilisateurs"
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

    if ($conn->query($sql) === TRUE) {
        // Redirection vers la page d'accueil avec le nom de l'utilisateur
        header("Location: page_acc.php?nom=$nom");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d2de6ecd94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="test.css">
    <title>Litee Chat</title>
</head>
<body>
   
    <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1>Créer un compte</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f" ></i></a>
                        <a href="#"><i class="fab fa-google-plus-g" ></i></a>
                        <a href="#"><i class="fab fa-linkedin-in" ></i></a>
                    </div>
                    <span>Utiliser compte gmail</span>
                    <input type="text" placeholder="Nom">
                    <input type="text" placeholder="Prenom">
                    <input type="email" placeholder="Email">
                    <input type="mot-de-passe" placeholder="Mot de passe">
                    <button>Créer le compte</button>
                </form>
            </div>
            <div class="form-container login-container">
                <form action="#">
                    <h1>Se connecter</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f" ></i></a>
                        <a href="#"><i class="fab fa-google-plus-g" ></i></a>
                        <a href="#"><i class="fab fa-linkedin-in" ></i></a>
                    </div>
                    <span>Je n'est pas de compte</span>
                    <input type="email" placeholder="Email">
                    <input type="mot-de-passe" placeholder="Mot de passe">
                    <button>Se connecter</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                    <img src="photos/logo.png" alt="">
                        <h1>Litee Chat</h1>
                        <p>La communauté vous attend connectez vous et amusez vous! </p>
                        <button class="ghost" id="login">Se connecter</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                    <img src="photos/logo.png" alt="">
                        <h1>Bienvenue sur Litee Chat</h1>
                        <p>Vous voulez rejoindre la communauté c'est simple cliquez et créez votre compte</p>
                        <button class="ghost" id="signUp">Créer un compte</button>
                    </div>
                </div>
            </div>
        </div>

</body>
<script src="test.js"></script>

</html>