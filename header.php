

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d2de6ecd94.js" crossorigin="anonymous"></script>
    <title>Litee Chat</title>
</head>
<body>
    
<div class="parent">
    <div class="header"> </div>
    <div class="logo"><a href="index.php"><img src="photos/logo.png" alt=""></a>
    </div>

    <div class="titre">Litee Chat </div>
    <div class="boutons"> 
    <button class="reglages">
            <i class="fas fa-gear"></i>
            reglages
          </button>
          
          <button class="compte">
            <i class="fas fa-user"></i>
            Compte
          </button>

          <button class="deconnexion">
          <i class="fa-solid fa-power-off"></i>
            Deconnexion
          </button>
    </div>
</div>

</body>
<script>
     // Récupérer les références des boutons
  var reglagesButton = document.querySelector('.reglages');
  var compteButton = document.querySelector('.compte');
  var deconnexionButton = document.querySelector('.deconnexion');

  // Ajouter un gestionnaire d'événements de clic au bouton "Réglages"
  reglagesButton.addEventListener('click', function() {
    window.location.href = 'parametre.php';
  });

  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  compteButton.addEventListener('click', function() {
    window.location.href = 'connexion.php';
  });
  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  deconnexionButton.addEventListener('click', function() {
    window.location.href = 'connexion.php';
  });
</script>
</html>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.header { grid-area: 1 / 1 / 2 / 6; }
.logo { grid-area: 1 / 1 / 2 / 2; }
.titre { grid-area: 1 / 2 / 2 / 5; }
.boutons { grid-area: 1 / 5 / 2 / 6; }

.header {
    background: rgb(148,187,233);
    background: linear-gradient(180deg, rgba(148,187,233,1) 0%, rgba(238,174,202,1) 100%);
    width: 100%;
    height: 110px;
    display: flex;
}

.logo {
    position: fixed;

}

.titre {
    font-size: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.boutons {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.compte {
  border: none;
  background: none;
  cursor: pointer;
  padding: 5px;
  color: white;
  font-size: 15px;
}

.reglages {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
}

.reglages i {
    font-size: 40px;
}

.compte i {
  font-size: 40px;
}

.deconnexion {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
}

.deconnexion i {
  font-size: 40px;
}
</style>