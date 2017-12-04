
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

    <body>
        <?php $title = htmlspecialchars($post['title']); ?>

        <?php ob_start(); ?>

        <div class='container-fluid'>

            <div class="row">
                <div class="col-lg-6">
                    <h5><a href="index2.php">Retour à la liste des billets</a></h5>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <h3>
                        <?= htmlspecialchars($post['title']) ?><br />
                    </h3>
                    <h4><em> <?= $post['creation_date_fr'] ?></em></h4><br /><br/>
                    <p>
                        <?= nl2br(htmlspecialchars($post['content'])) ?><br /><br/>
                    </p>
                </div>
                <div class="col-lg-1"></div>
            </section>

            <div class="line"></div>

            <div class="row">

                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <br />
                    <?php
                    while ($comment = $comments->fetch()) {
                        ?>
                        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
                        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br />
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="line"></div>   
            <div class="col-lg-1"></div>
            <div class="comments col-lg-10">
                <h2>Ecrire un commentaires</h2><br/>
                <form action="index2.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                    <div class="form-group">

                        <div class="col-sm-10">
                            <input type="text" id="author" placeholder="Votre nom" name="author" class="form-control"/>
                        </div>
                    </div><br /><br /><br />
                    <div class="form-group">
                        <div class="col-sm-10">
                            <textarea id="comment" name="comment" placeholder="Votre messsage" rows="6" class="form-control"></textarea><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-sm-10">
                            <input id="submitcomment" type="submit" value="Envoyer" name="submitcomment" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1"></div>



        </div>


        <?php $content = ob_get_clean(); ?>

        <?php require('template.php'); ?>


    </body>
</html>