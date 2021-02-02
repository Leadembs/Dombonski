<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title> Suppression du mail </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <h1> Suppression du mail</h1>

 

    <?php

 

        if($_GET['mail']){
            $adresseMail = $_GET['mail'];

 

        $db = new PDO ('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8','exmachinefmci','carp310M');

 

        $selectall = $db->query ('SELECT * FROM mdsdembinski WHERE mail="'.$adresseMail.'"');
        $result = $selectall->fetch();
        $counttable = (count($result));

 

        if($counttable>= 1){
            $delete = $db->prepare('DELETE FROM mdsdembinski WHERE mail="'.$adresseMail.'"');
            $delete->execute();
            //confirmation de suppression
        echo('votre &ecirc;tes bien desabonn&eacute; de notre liste de diffusion');
        }

 

        

 

    }

 

    ?>

 

</body>
</html>