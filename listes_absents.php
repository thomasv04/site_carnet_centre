
<?php
include 'connexion.php';
include 'fonction.php';

$requete = mysqli_query($link,'SELECT * FROM jour')or die('Erreur SQL !' .mysql_error());


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
        <h1 class="titre">Listes absents</h1>

        <?php while ($donnees = mysqli_fetch_array($requete)){  $date_jour = $donnees['date']; $id = $donnees['id_jour'];?>
        <?php
           $requete2 = mysqli_query($link,'SELECT * FROM appel_fait where id_jour = '."$id" )or die('Erreur SQL !' .mysql_error());
           $data = mysqli_fetch_array($requete2);
           $est_check= $data['est_check'];
           $jour= nom_jour($date_jour);
           $annee= annee($date_jour);
           $mois= nom_mois($date_jour);
           $num_jour= numeros_jour($date_jour);


        ?>

        <div class="liste"><a href="absents.php"><h1

           <?php  if($est_check == 1){
            echo 'class="done"';
            }   ?>


          ><?php echo ''."$jour".' '."$num_jour".' '."$mois" ?><img class="arrow2 " src="img/arrow2.png"> </h1></a></div>


        <?php } ?>


        <div class="fin_semaine"></div>

        <?php





        ?>






    </body>
</html>
