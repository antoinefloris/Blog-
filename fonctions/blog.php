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

