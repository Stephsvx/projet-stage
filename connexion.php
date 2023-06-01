<?php include 'inscription-utilisateur.php';
?>
<?php include 'connexion-utilisateurs.php';
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
                <form action="inscription-utilisateur.php" method="POST">
                    <h1>Créer un compte</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f" ></i></a>
                        <a href="#"><i class="fab fa-google-plus-g" ></i></a>
                        <a href="#"><i class="fab fa-linkedin-in" ></i></a>
                    </div>
                    
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

            <div class="form-container login-container">
                <form action="connexion-utilisateurs.php" method="POST">
                    <h1>Se connecter</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f" ></i></a>
                        <a href="#"><i class="fab fa-google-plus-g" ></i></a>
                        <a href="#"><i class="fab fa-linkedin-in" ></i></a> 
                    </div>  
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="motdepasse">Mot de passe :</label>
                        <input type="password" id="motdepasse" name="motdepasse" required>  

                        <input type="submit" name="submit" value="Se connecter">
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

<style>
    input[type="submit"] {
  background-color: #adf0d1;
    color: #00203f;
    border: 1px solid #adf0d1;
    font-size: 16px;
    font-weight: bold;
    padding: 16px 32px;
    margin-top: 24px;
    letter-spacing: 1px;
    border-radius: 50px;
    border-color: rgba(0, 32, 63, .45);
    transition: .2s ease-in;
}

input[type="submit"]:hover {
    cursor: pointer;
    background-color: #00203f;
    color: #adf0d1;
}
</style>