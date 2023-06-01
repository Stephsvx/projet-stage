<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litee Chat</title>
</head>
<body>
<div class="parent3">
    <div class="contenu"> </div>
    <div class="utilisateurs"> 
    <div class="people-list" id="people-list">
            <div class="search">
                <input type="text" placeholder="search" />
                <i class="fa fa-search"></i>
            </div>
    <ul class="list">
        <li class="clearfix">
        <img src="photos/john.png" alt="avatar" />
        <div class="about">
            <div class="name">John Doe</div>
            <div class="status">
                <i class="fa fa-circle online"></i> Was that designed by you?+
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/aitana.png" alt="avatar" />
        <div class="about">
            <div class="name">Aitana Sainz</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/hugo.png" alt="avatar" />
        <div class="about">
            <div class="name">Hugo Alias</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/bell.png" alt="avatar" />
        <div class="about">
            <div class="name">Bell Barrier</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/jessica.png" alt="avatar" />
        <div class="about">
            <div class="name">Jessica Doe</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/paul.png" alt="avatar" />
        <div class="about">
            <div class="name">Pau Harris</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/jordi.png" alt="avatar" />
        <div class="about">
            <div class="name">Jordi Basté</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>

        <li class="clearfix">
        <img src="photos/marc.png" alt="avatar" />
        <div class="about">
            <div class="name">Marc Sagalés</div>
            <div class="status">
                <i class="fa fa-circle offline"></i> last seen 2 hours ago
            </div>
        </div>
        </li>
    </ul>

</div>
</div>
    <div class="messagerie"> 
        <div class="chat">
            <div class="chat-history">
            <ul id="chat-messages"></ul>
            </div>
            <div class="chat-message clearfix"></div>
        </div>
    </div>
    <div class="barre-envoie"><textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea></div>
    <div class="envoyer"><button id="btn-send">envoyer</button> </div>
    
</div> 

<script src="script.js"></script>   
</body>
</html>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
}
.parent3 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(12, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.contenue { grid-area: 1 / 1 / 13 / 6; }
.utilisateurs { grid-area: 1 / 1 / 13 / 2; }
.messagerie { grid-area: 1 / 2 / 13 / 6; }
.barre-envoie { grid-area: 12 / 2 / 13 / 5; }
.envoyer { grid-area: 12 / 5 / 13 / 6; }



/*utilisateurs*/
.utilisateurs {
  background: rgb(182,238,174);
  background: linear-gradient(90deg, rgba(182,238,174,1) 0%, rgba(148,187,233,1) 100%);
}
.utilisateurs .people-list {
  width: 260px;
  float: left;
}
.utilisateurs .people-list .search {
  padding: 20px;
}
.utilisateurs .people-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: black;
  width: 90%;
  font-size: 14px;
}
.utilisateurs .people-list .fa-search {
  position: relative;
  left: -25px;
}
.utilisateurs .people-list ul {
  padding: 20px;
  height: 770px;
}
.utilisateurs .people-list ul li {
  padding-bottom: 20px;
}
.utilisateurs .people-list img {
  float: left;
}
.utilisateurs .people-list .about {
  float: left;
  margin-top: 8px;
}
.utilisateurs .people-list .about {
  padding-left: 8px;
}
.utilisateurs .clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

/*fin utilisateurs*/

/*messagerie*/
.messagerie {
  background: rgb(148,187,233);
  background: linear-gradient(90deg, rgba(148,187,233,1) 0%, rgba(182,238,174,1) 100%);
}
.messagerie .chat-history {
  overflow-y: scroll;
}
.messagerie .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.messagerie .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.messagerie .message {
  color: black;
  padding: 18px 20px;
  line-height: 8px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 25px;
  width: 98%;
}
.messagerie .my-message {
  background: #86BB71;
}
.messagerie .other-message {
  text-align: right;
  background: #94C2ED;
}
.messagerie .fa-file-o, .messagerie .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}
.messagerie .align-right {
  text-align: right;
}
.messagerie .float-right {
  float: right;
}

.barre-envoie {
    display: flex;
    justify-content: end;
    align-items:last baseline ;
}

.barre-envoie textarea {
  width: 100%;
  border: none;
  padding: 10px 20px;
  font: 14px/22px "Lato", Arial, sans-serif;
  margin-bottom: 5px;
  border-radius: 5px;
  resize: none;
  background-color: #eaecf0;
 
}

.envoyer {
  display: flex;
  justify-content: center;
  align-items: center;
}
.envoyer button {
  float: right;
  color: rgb(87, 87, 240);
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
}
.envoyer button:hover {
  color: black;
}

/*fin messagerie*/
</style>