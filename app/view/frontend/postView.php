<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class='container'>

    <div class="row">

        <div class="col-lg-6">
            <p><a href="index2.php">Retour à la liste des billets</a></p>
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="post">
                    <h3>
                        <?= htmlspecialchars($post['title']) ?>
                        <em>le <?= $post['creation_date_fr'] ?></em>
                    </h3>

                    <p>
                        <?= nl2br(htmlspecialchars($post['content'])) ?>
                    </p>
                </div>
            </div>
        </div>
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
