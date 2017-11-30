
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>


    <header class="row">
        <div class="col-lg-12">
            <h1>Billet simple pour l'Alaska</h1>
        </div>
    </header>
    
<p>Les derniers episodes ! </p>>>


    <?php
    while ($data = $posts->fetch()) {
        ?>
        <div id="contener">
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br /><br /><br />
                    <em><a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                </p>
            </div>
        </div>
        <?php
    }
    $posts->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>