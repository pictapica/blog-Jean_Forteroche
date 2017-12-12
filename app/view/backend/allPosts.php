<?php ob_start(); ?>
<p style="text-align: center">Il y a actuellement <?= $nombreNews ?> news. En voici la liste :</p>

<table>
    <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
    <?php
    foreach ($listeNews as $news) {
        echo '<tr><td>', $news['auteur'], '</td><td>', $news['titre'], '</td><td>le ', $news['dateAjout']->format('d/m/Y à H\hi'), '</td><td>', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le ' . $news['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="news-update-', $news['id'], '.html"><img src="/images/update.png" alt="Modifier" /></a> <a href="news-delete-', $news['id'], '.html"><img src="/images/delete.png" alt="Supprimer" /></a></td></tr>', "\n";
    }
    ?>
</table>
<div class="panel panel-primary">
    <table class="table table-striped table-condensed">
        <div class="panel-heading"> 
            <h3 class="panel-title">Tous les billets</h3>
        </div>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Date de creation</th>
                <th>Date de modification</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = $posts->fetch()) {
                ?> 
                <tr>
                    <td><?= htmlspecialchars($data['title']) ?></td>
                    <td><?= nl2br(htmlspecialchars($data['extrait'])) ?>...</td>
                    <td><?= $data['creation_date_fr'] ?></td>
                    <td><?= $data['update_date_fr'] ?></td>
                </tr>
                <?php
            }
            $posts->closeCursor();
            ?>

        </tbody>
    </table>
</div>
<?php $content = ob_get_clean(); ?>

<?php
require('template.php');
