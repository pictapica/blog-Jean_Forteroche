
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-grid-min.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../../web/bootstrap/css/custom.css"> 
    </head>
        
    <body><?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class='container-fluid'>

    <div class="row">

        <div class="col-lg-6">
            <p><a href="index2.php">Retour à la liste des billets</a></p>
        </div>
        </div>
        <header class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="post">
                    <h3>
                        <?= htmlspecialchars($post['title']) ?><br />
                        
                    </h3>
                    <h4><em> <?= $post['creation_date_fr'] ?></em></h4>
                    
                    <p>
                        <?= nl2br(htmlspecialchars($post['content'])) ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </header>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="row">
                <div class="comments">
                    <h2>Commentaires</h2>
                    <form action="index2.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div>
                            <label for="author">Auteur</label><br />
                            <input type="text" id="author" name="author" />
                        </div>
                        <div>
                            <label for="comment">Commentaire</label><br />
                            <textarea id="comment" name="comment"></textarea>
                        </div>
                        <div>
                            <input type="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
</div>
        <br />
        <?php
        while ($comment = $comments->fetch()) {
            ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br />

            <?php
        }
        ?>
        <?php $content = ob_get_clean(); ?>

        <?php require('template.php'); ?>
            <!-- jQuery CDN -->
        
    </body>
</html>