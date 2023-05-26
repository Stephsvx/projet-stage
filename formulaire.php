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

<style>

input[type="submit"][name="submit"][value="Inscription"] {
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

input[type="submit"][name="submit"][value="Inscription"]:hover {
    cursor: pointer;
    background-color: #00203f;
    color: #adf0d1;
}

</style>