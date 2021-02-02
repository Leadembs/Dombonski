<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=coiffure;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM coiffeurs');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Coiffure</title>
  </head>
  <body>
  	<h2>Ajout de coiffeur</h2>
  	<form action="ajout-coiffeur.php" method="post">
  		<input type="text" name="coiffeur">
  		<input type="submit" name="valider">
  	</form>

  	<h2>Liste de coiffeurs</h2>
    <?php
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    //foreach ($reponse as $donnees) 
    :
    ?>
        <p>
        <strong>Nom</strong> : <?php echo $donnees['nom']; ?> 
       </p>
    <?php
    endwhile;

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
  </body>
</html>