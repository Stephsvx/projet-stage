

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Litee Chat</title>
</head>
<body>
    
<div class="parent">
    <div class="header"> </div>
    <div class="logo"><img src="photos/logo.png" alt=""> </div>
    <div class="titre">Litee Chat </div>
    <div class="boutons"><a href=""><img src="photos/items/settings.png" alt=""></a> </div>
</div>

</body>
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
    background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    width: 100%;
    height: 100px;
    display: flex;
}

.logo {

}

.titre {
    font-size: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.boutons {
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>