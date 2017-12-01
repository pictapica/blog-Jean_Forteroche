
<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<div class='container-fluid'>

    <header class="row">
<<<<<<< HEAD
        <div class="col-lg-12">
            <h1>Billet simple pour l'Alaska</h1>
=======
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <h1>Bienvenue sur mon blog !</h1>
            <p>Vous aller pouvoir y découvrir régulièrement des épisodes de mon
                nouveau livre. N'hésitez pas à commenter. Je serai très heureux
                d'avoir votre retour et là je vais tester d'écrire encore plus
                pour voir comment se comporte mon texte.</p>
>>>>>>> 216398230b5a8ec7a9a25216ec6112aa451b78ae
        </div>
        <div class="col-lg-1"></div>
    </header>
    <div class="row">
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
        </div>
    </div>
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>