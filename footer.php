<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litee Chat</title>
</head>
<body>
    
<div class="parent2">
    <div class="footer"> </div>
    <div class="mentions">Mentions Légales </div>
    <div class="cookies">Politique de cookies </div>
    <div class="contact">Tel : 0612345678<br/>Mail : liteechat@mail.com </div>
    <div class="reseaux"> <img src="photos/items/facebook.png" alt=""> <img src="photos/items/instagram.png" alt=""> <img src="photos/items/twitter.png" alt=""> </div>
    <div class="logo2"> <img src="photos/logo.png" alt="" width="100px" height="100px" > </div>
</div>

</body>
</html>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.parent2 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.footer { grid-area: 1 / 1 / 2 / 6; }
.mentions { grid-area: 1 / 1 / 2 / 2; }
.cookies { grid-area: 1 / 2 / 2 / 3; }
.contact { grid-area: 1 / 3 / 2 / 4; }
.reseaux { grid-area: 1 / 4 / 2 / 5; }
.logo2 { grid-area: 1 / 5 / 2 / 6; }

.footer {
    background: rgb(148,187,233);
    background: radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(238,174,202,1) 100%);
    width: 100%;
    height: 135px;
    display: flex;
}

.mentions {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 20px;
}

.cookies {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 20px;
}

.contact {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 20px;
}

.reseaux {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.logo2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>