
<?php
include 'connexion.php';

$requete = mysqli_query($link,'SELECT * FROM session_centre where id_annee = 1')or die('Erreur SQL !' .mysql_error()); ;


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

        <?php while ($donnees = mysqli_fetch_array($requete)){  $nom_session = $donnees['nom_session']; $groupe = $donnees['nom_groupe']; }?>


        <h1 class="titre">Carnet été <?php echo $nom_session; ?> <br><span><?php echo $groupe; ?></span></h1>
        <div class="page_menu">

            <ul>
                <li><a href="liste_enfants.php"><h2>LISTE ENFANTS</h2></a></li>
                <li><a href="listes_absents.php"><h2>ABSENTS</h2></a></li>
                <li><a href=""><h2>ALLERGIES</h2></a></li>
                <li><a href="activites.php"><h2>ACTIVITÉS</h2></a></li>
                <li><a href="listes_notes.php"><h2>NOTES</h2></a></li>
            </ul>
        </div>

















    </body>
</html>
