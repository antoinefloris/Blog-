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
     image,
     video
     FROM
     articles
     ORDER BY
     id
     DESC
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

function article() {
    global $bdd;
    $id = (int)$_GET["id"];

    $article = $bdd->prepare("SELECT id, titre, contenu, publication, image, video FROM articles where id = ?");
    $article->execute([$id]);
    $article = $article->fetch();

    if(empty($article))
        header("Location: index.php");
    else
        return $article;
}

function recherche() {
    global $bdd;

    extract($_POST);

    $recherche = $bdd->prepare("SELECT id, titre, accroche, publication, image, video FROM articles where titre LIKE :query OR contenu LIKE :query");
    $recherche->execute([
        "query" => '%' . $query . '%'
    ]);
    $recherche = $recherche->fetchAll();

    return $recherche;

}