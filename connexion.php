<?php include 'co_utilisateur.php';
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
                    
                </form>
            </div>
            <div class="form-container login-container">
                
            <form action="co_utilisateur.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" id="motdepasse" name="motdepasse" required>

    <input type="submit" name="submit" value="Inscription">
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