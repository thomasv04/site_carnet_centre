<?php

function nom_jour($date) {
    $jour_semaine = array(1=>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi", 7=>"Dimanche");

    list($annee, $mois, $jour) = explode ("-", $date);

    $timestamp = mktime(0,0,0, date($mois), date($jour), date($annee));
    $njour = date("N",$timestamp);

    return $jour_semaine[$njour];
}


function annee($date) {
    list($annee, $mois, $jour) = explode ("-", $date);
    return $annee;
}


function nom_mois($date) {
    $nom_mois = array(1=>"janvier", 2=>"fevrier", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"aout", 9=>"septembre", 10=>"octobre", 11=>"novembre", 12=>"decembre");

    list($annee, $mois, $jour) = explode ("-", $date);

    $timestamp = mktime(0,0,0, date($mois), date($jour), date($annee));
    $nmois = date("n",$timestamp);

    return $nom_mois[$nmois];
}


function numeros_jour($date) {
    list($annee, $mois, $jour) = explode ("-", $date);
    return $jour;
}



//echo nom_jour("2017-07-10");

?>
