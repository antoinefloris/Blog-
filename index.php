<?php
include 'fonctions/bdd.php';
include 'fonctions/blog.php';
$bdd = bdd();
$articles = articles();
include 'header.php';
?>

    <div class="container article">
        <div class="row">
            <form method="post" action="">
                <div class="col-sm-10">
                    <input type="text" name="query" placeholder="Rechercher un article ...">
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="OK!">
                </div>
            </form>
        </div>
        <div class="row">
            <?php
            foreach($articles as $article) :
            ?>
            <div class="col-md-4 col-sm-6">
                <article>
                    <img src="img/<?= $article["image"]; ?>" alt="https://placeimg.com/640/480/people">
                    <p class="date">Posté le <time datetime="<?= $article["publication"]; ?>"><?= $article["publication"]; ?></time></p>
                    <h1><?= $article["titre"]; ?></h1>
                    <p><?= $article["accroche"]; ?></p>
                    <a href="article.php?id=<?= $article["id"]; ?>">Lire l'article</a>
                </article>
             </div>
            <?php
            endforeach;
            ?>

        </div>
<?php
include 'footer.php';
?>