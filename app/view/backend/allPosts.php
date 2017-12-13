<?php ob_start(); ?>

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
                <th></th>
                <th></th>
                <th></th>
                <th></th>
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
                    <td><button>Publier</button></td>
                    <td><button>Lire</button></td>
                    <td><button>Modifier</button></td>
                    <td><button>Supprimer</button></td>
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
