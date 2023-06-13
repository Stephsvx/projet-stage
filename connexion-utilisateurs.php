<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_POST['submit'])) { 

    ////////////////////////////////////////////////////////////////////////////////////

// l'erreur était la le submit été pas rappler aux niveaux du isset donc il pouvait pas verifier si vide 
// c'est le submit que tu recupere dans ton formulaire

////////////////////////////////////////////////////////////////////////////////////////

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
        $row = $result->fetch_assoc();
        if (password_verify($motdepasse, $row['motdepasse'])) {
            echo "Connexion réussie !";
            $_SESSION['utilisateur_connecte'] = array(
                'id' => $row['id'],
                'prenom' => $row['prenom'],
                'nom' => $row['nom'],
                'email' => $row['email']
            );
            $_SESSION['prenom'] = $row['prenom'];
            $conn->close();

            /////////////////////////////////////////////////////////////////////////////////////////

            // le echo blocker ici sur le header quand on fait la location il faut pas de echo ou html sans close mais sa je rexpliquerais 

            ////////////////////////////////////////////////////////////////////////////////////////////
            
            header("Location: index.php");
            exit();
        } else {
           
            echo "Mot de passe incorrect.";
        }
    } else {
       
        echo "Utilisateur non trouvé.";
    }

    $conn->close();
}
?>


