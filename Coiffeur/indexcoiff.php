<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffeur</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <body>
<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci; charset=utf8', 'exmachinefmci', 'carp310M');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM coiffeurdembinski');

?>

  	<h2>Liste de coiffeurs</h2>
    <?php
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    //foreach ($reponse as $donnees) 
    :
    ?>
        <p>
        <strong>Nom</strong> : <?php echo $donnees['coiffeur']; ?> 
       </p>
    <?php
    endwhile;

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
  </body>
</html>