<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffeur</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    
<?php
if(isset($_POST["envoie"])){
    if($_POST["coiffeur"]=='' || !isset($_POST["coiffeur"])){

    }
     else{
        echo '<script type="text/javascript">alert(\'Message envoyé\');</script>';


if(isset($_POST['rights'])){
    if(!isset($_POST['coiffeur'])){
        $_POST['coiffeur']='';
    }
    $coiffeur = $_POST["coiffeur"];
    $bdd = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci; charset=utf8', 'exmachinefmci', 'carp310M');

    $result = $bdd->prepare('INSERT INTO coiffeurdembinski (coiffeur) VALUES (:coiffeur)');
    $result->execute(array('coiffeur' => $coiffeur));

    
}
}
}
?>
<div id="container">
        <h1>Contact</h1>

        <form action="#" method="post" name="contact" id="contact" onsubmit="return good()">

            <div id="bloc">
                
            <h2><strong> Nationalité du Coiffeur : </h2></strong> 
                <select id="nationalite">
                    <option>Français</option>
                    <option>Anglais</option>
                    <option>Belge</option>
                    <option>Espagnol</option>
                </select>
            </div>
        
            <h2><strong> Nom du coiffeur : </h2></strong> 
            <div>
                <input class="text" type="text" name="coiffeur" placeholder="Coiffeur">
            </div>


            <div id="date">
            <h2><strong>Dates de rendez-vous : </h2></strong>
                <input type="date" name="Date" placeholder="Date de rendez-vous">
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