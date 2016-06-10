<?php
function articles(){
    global $bdd;

    $articles = $bdd->query("
    SELECT
     id,
     titre,
     accroche,
     contenu,
     publication,
     image
     FROM
     articles
     ");
    /* Permet de gerer l'affichage de la boucle foreach */
    $articles = $articles->fetchAll();
    return $articles;
}

function formattage_date($publication) {
    $publication = explode(" ", $publication);
    $date = explode("-", $publication[0]);
    $heure = explode(":", $publication[1]);

    $resultat = $date[2] . '/' . $date[1] . '/' . $date[0] . ' ' . 'à' . ' ' . $heure[0] . 'h' . $heure[1];

    return $resultat;
}

