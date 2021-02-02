<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="fichier.js"></script>
</head>

<body>

<?php 

echo "Hello Word";

if(isset($_POST["envoie"])){
    if($_POST["message"]=='' || !isset($_POST["message"])){

        echo "Veuillez remplir le champ message";
    }
     else{
        mail('leadembs@gmail.com', 'Hello toi', $_POST['message']);
        echo '<script type="text/javascript">alert(\'Message envoyé\');</script>';


if(isset($_POST['rights'])){
    if(!isset($_POST['mail'])){
        $_POST['mail']='';
    }
    $addresseMail = $_POST["mail"];
    $message = $_POST["message"];
    $bdd = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci; charset=utf8', 'exmachinefmci', 'carp310M');

    $result = $bdd->prepare('INSERT INTO mdsdembinski (mail, message) VALUES (:addresseMail, :message)');
    $result->execute(array('addresseMail' => $addresseMail, "message" => $message));
}
}
}

?>

    <div id="container">
        <h1>Contact</h1>

        <form action="#" method="post" name="contact" id="contact" onsubmit="return good()">

            <div id="bloc">
                
                <select id="nationalite">
                    <option>Français(e)</option>
                    <option>Anglais(e)</option>
                    <option>Belge</option>
                </select>
            </div>

            <div id="jesaispas">
                Mr<input class="civ" type="radio" name="civ">
                Mme<input class="civ" type="radio" name="civ">
                Non Binaire<input class="civ" type="radio" name="civ">
            </div>

            <div>
                <input class="text" type="text" name="user_name" placeholder="Nom, Prénom">
            </div>

          

            <div>
                <input class="text" type="email" name="mail" placeholder="Email">
            </div>

            <div>
                <input class="text" type="number" name="user_phone" placeholder="Numéro de Téléphone">
            </div>

            <div id="date">
                <input type="date" name="Date" placeholder="Date de Naissance">
            </div>

        

            <div>
                <textarea id="msg" class="text" name="message" id="message" placeholder="Message"></textarea>
            </div>


        
            <input type="checkbox" name="rights" id="form-autorisation">
		<label for="rights"> Je vous autorise à conserver mes coordonées</label><br><br>
      

        <div id="button">
            <input type="submit" value="ENVOYER" name="envoie"><br>

            </div>

            <div id="hub">
                <a href="index.html">Revenir en arrière</a>
            </div>
        </form>
    </div>
</body>

</html>