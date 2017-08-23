<?php
include 'connexion.php';

$requete = mysqli_query($link,'SELECT * FROM liste_enfant where id_annee = 1')or die('Erreur SQL !' .mysql_error()); ;


?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"> <title>Carnet été 2017 / Petits</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="icon" href="img/icon.jpg"/>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    </head>

    <body>
        <a href="Index.php"><img class="arrow" src="img/arrow.png" ></a>
        <h1 class="titre">Liste enfants</h1>

        <?php while ($donnees = mysqli_fetch_array($requete)){  $nom = $donnees['nom_enfant']; $prenom = $donnees['prenom_enfant']; $nom = strtoupper($nom);?>

            <div class="statut_enfant"><h1><?php echo $nom; ?><span><?php echo $prenom; ?></span></h1></div>


        <?php } ?>















    </body>
</html>
