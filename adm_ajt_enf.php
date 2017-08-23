<?php
include 'connexion.php';

$requete = mysqli_query($link,'SELECT * FROM liste_enfant where id_annee = 1 order by id_enfant ')or die('Erreur SQL !' .mysql_error()); ;


if(isset($_POST["nom_enfant"]) && isset($_POST["prenom_enfant"])){
        $nom_enfant=$_POST["nom_enfant"];
        $prenom_enfant=$_POST["prenom_enfant"];
        $requete2= "INSERT INTO `liste_enfant` ( `nom_enfant`, `prenom_enfant`, `id_annee`) VALUES ('$nom_enfant', '$prenom_enfant', '1')";
        $requete3 = mysqli_query($link,$requete2)or die('Erreur SQL !' .mysql_error()) ;

        header("location: adm_ajt_enf.php");

}

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
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

        <script type='text/javascript' src="js/script.js"></script>
    </head>

    <body>

        <a href="listes_absents.php"><img class="arrow" src="img/arrow.png" ></a>
        <h1 class="titre">Ajout enfants</h1>

        <form action="adm_ajt_enf.php" method="post">
            <h3>Nom de l'enfant</h3><input type="text" name="nom_enfant">
            <h3>Prénom de l'enfant</h3><input type="text" name="prenom_enfant">
            <button>Envoyer</button>
        </form>

        <table>

            <?php while ($donnees = mysqli_fetch_array($requete)){  $nom = $donnees['nom_enfant']; $prenom = $donnees['prenom_enfant']; $nom = strtoupper($nom);?>

            <tr>
                <td><?php echo $nom; ?><span> <?php echo $prenom; ?></td>
            </tr>

            <?php } ?>

        </table>










    </body>
</html>
