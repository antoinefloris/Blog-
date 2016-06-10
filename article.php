<?php
require_once 'fonctions/bdd.php';
include_once 'fonctions/blog.php';
$bdd = bdd();
$article = article();
include 'header.php';
?>


        <div class="row">
            <article>
                <div class="col-sm-1">
                </div>
                <div id="video" class="col-sm-5">
                    <?= $article["video"]; ?>
                </div>
                <div class="col-sm-5">
                    <h1 class="title"><?= $article["titre"]; ?></h1>
                    <p><?= $article["contenu"]; ?></p>
                </div>
            </article>
        </div>
    </div>

<?php
include 'footer.php';
?>