<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litee Chat</title>
</head>
<body>

<div class="parent4">
    <div class="contenue2"></div>
    <div class="configuration"> 
        <div class="liste">

            <div class='itemMenu'>
                <i class="fa-solid fa-gears"></i>
                <a href="#" class="itemMenuLink">General Settins</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-brush"></i>
                <a href="#" class="itemMenuLink">Apparences</a>            
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-shield-halved"></i>
                <a href="#" class="itemMenuLink">Pivacy and Security</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-image"></i>
                <a href="#" class="itemMenuLink">Multimedia</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-laptop-file"></i>
                <a href="#" class="itemMenuLink">Other Device</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-language"></i>
                <a href="#" class="itemMenuLink">Time and Languages</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-address-book"></i>
                <a href="#" class="itemMenuLink">Contacts</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-microphone"></i>
                <a href="#" class="itemMenuLink">Hey, Celia</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-cloud"></i>
                <a href="#" class="itemMenuLink">Sync with Litee Cloud</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-user"></i>
                <a href="#" class="itemMenuLink">Litee Account</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-circle-info"></i>
                <a href="#" class="itemMenuLink">About Litee Chat</a>
            </div>
            <div class='itemMenu'>
                <i class="fa-solid fa-circle-down"></i>
                <a href="#" class="itemMenuLink">Update</a>          
            </div>
        </div>
    </div>
    <div class="menu-configuration"> 

        <h1 class="titre">General Settings</h1><br/>

        <details class="menu">
        <summary class="menu-border">
            <div><i class="fa-solid fa-power-off"></i> Personnal Data</div>
            <i class="fa-solid fa-chevron-down"></i>
        </summary>
        <div>
            <ul>
                <ul>
                
                </ul>
            </li>
            </ul>
        </div>
        </details>


        <details class="menu">
        <summary class="menu-border">
            <div> <i class="fa-solid fa-power-off"></i> Notifications</div>
            <i class="fa-solid fa-chevron-down"></i>
        </summary>
        <div>
            <ul>
                <ul>
                <li><a href="#">Recieve notifications from groups</a></li>
                <li><a href="#">Recieve notifications from contacts</a></li>
                <li><a href="#">Recieve notifications from unknown people</a></li>
                <li><a href="#">Recieve system notifications</a></li>
                </ul>
            </li>
            </ul>
        </div>
        </details>


        <details class="menu">
        <summary class="menu-border">
            <div><i class="fa-solid fa-power-off"></i> Calls and Videocalls</div>
            <i class="fa-solid fa-chevron-down"></i>
        </summary>
        <div>
            <ul>
                <ul>
                
                </ul>
            </li>
            </ul>
        </div>
        </details>


        <details class="menu">
        <summary class="menu-border">
            <div><i class="fa-solid fa-power-off"></i> Third-party platforms</div>
            <i class="fa-solid fa-chevron-down"></i>
        </summary>
        <div>
            <ul>
                <ul>
                
                </ul>
            </li>
            </ul>
        </div>
        </details>

        <details class="menu">
        <summary class="menu-border">
            <div><i class="fa-solid fa-power-off"></i> Storage</div>
            <i class="fa-solid fa-chevron-down"></i>
        </summary>
        <div>
            <ul>
                <ul>
                
                </ul>
            </li>
            </ul>
        </div>
        </details>
    </div>
</div>
<script src="https://kit.fontawesome.com/d2de6ecd94.js" crossorigin="anonymous"></script>
</body>
</html>

<style>

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
/*cofiguration*/

.parent4 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(12, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.contenue2 { grid-area: 1 / 1 / 13 / 6; }
.configuration { grid-area: 1 / 1 / 13 / 2; }
.menu-configuration { grid-area: 1 / 2 / 13 / 6; }


.configuration {
    background: rgb(182,238,174);
    background: linear-gradient(90deg, rgba(182,238,174,1) 0%, rgba(148,187,233,1) 100%);
    height: 1090px;
} 

.itemMenu{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    width: 100%;
    height: 50px;
}
  
.itemMenuLink{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    width: 100%;
    height: 50px;
    text-decoration: none;
    color: black;
}

/*fin configuration*/

/*menu configuration*/
.menu-configuration {
    background: rgb(148,187,233);
    background: linear-gradient(90deg, rgba(148,187,233,1) 0%, rgba(182,238,174,1) 100%);
}

.menu-border{
    width: 96.5%;
    border: 1px solid $gray;
    background-color: #FFFFFF;
    padding: 1rem 2rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
  ul{
    list-style-type: none;
  }
  
  ul li{
    float: left;
    width: 900px;
    text-align: left;
    position: relative;
  }
  
  ul::after{
    content: "";
    display: table;
    clear: both;
  }
  
  a{
    display: block;
    text-decoration: none;
    color: black;
    border-bottom: 2px solid transparent;
    padding: 10px 0px;
  }
  
  a:hover{
    color: blue;
  }
  
  .sous{
    display: none;
    box-shadow: 0px 1px 2px #CCC;
    background-color: white;
    position: absolute;
    width: 100%;
    z-index: 1000;
  }
  ul li:hover .sous{
    display: block;
  }
  .sous li{
    float: none;
    width: 100%;
    text-align: left;
  }
  
  .sous a{
    padding: 10px;
    border-bottom: none;
  }
  
  .sous a:hover{
    border-bottom: none;
    background-color: RGBa(200,200,200,0.1);
  }
  
  .titre2 {
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 36px;
    margin-left: 58px;
    margin-top: 44px;
  }
  
  .deroulant1 > a::after{
    content:" ▼";
    font-size: 12px;
  }
  
  .deroulant1 {
    position: absolute;
    left: 1px;
    right: 1px;
    top: 1px;
    bottom: 1px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
  }
  
  .data {
    position: absolute;
    left: 70px;
    right: 1px;
    top: 107px;
    bottom: 1px;
    width: 900px;
    height: 62px;
    border: 1px solid rgba(0, 0, 0, 0.0578);
    border-radius: 3px;
  }
  
  .deroulant2 > a::after{
    content:" ▼";
    font-size: 12px;
  }
  
  .deroulant2 {
    position: absolute;
    left: 1px;
    right: 1px;
    top: 5px;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px 3px 0px 0px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
  }
  
  .notifications {
    position: absolute;
    width: 900px;
    height: 62px;
    margin-top: 125px;
    position: absolute;
    left: 70px;
    right: 0px;
    top: 50px;
    border: 1px solid rgba(0, 0, 0, 0.0578);
    border-radius: 3px;
  }
  
  .deroulant3 > a::after{
    content:" ▼";
    font-size: 12px;
  }
  
  .deroulant3 {
    position: absolute;
    left: 1px;
    right: 1px;
    top: 5px;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px 3px 0px 0px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
  }
  
  .appels {
    position: absolute;
    width: 900px;
    height: 62px;
    left: 70px;
    right: 1px;
    top: 440px;
    bottom: 1px;
    border: 1px solid rgba(0, 0, 0, 0.0578);
    border-radius: 3px;
  }
  
  .deroulant4 > a::after{
    content:" ▼";
    font-size: 12px;
  }
  
  .deroulant4 {
    position: absolute;
    left: 1px;
    right: 1px;
    top: 5px;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px 3px 0px 0px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
  }
  
  .plateforme {
    position: absolute;
    width: 900px;
    height: 62px;
    left: 70px;
    right: 1px;
    top: 510px;
    bottom: 1px;
    border: 1px solid rgba(0, 0, 0, 0.0578);
    border-radius: 3px;
  }
  
  .deroulant5 > a::after{
    content:" ▼";
    font-size: 12px;
  }
  
  .deroulant5 {
    position: absolute;
    left: 1px;
    right: 1px;
    top: 5px;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px 3px 0px 0px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
  }
  
  .stockage {
    position: absolute;
    width: 900px;
    height: 62px;
    left: 70px;
    right: 1px;
    top: 580px;
    bottom: 1px;
    border: 1px solid rgba(0, 0, 0, 0.0578);
    border-radius: 3px;
  }

</style>