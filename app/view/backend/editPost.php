<?php ob_start(); ?>
<div class="row principal">
    <section class="col-xs-12 col-md-offset-2 col-md-8">
        <h3>Ajouter un billet</h3>
        <div class="form-group">
        <form class="well-lg form-horizontal" action="" method="post">
			<div class="form-group">
				<label for="number">Numéro de chapitre</label> <br>
				<input type="text" class="form-control" name="number" required="required">
			</div>
            <div class="form-group">
                <label for="title">Titre</label> <br>
                <input type="text" class="form-control" name="title" required="required">
            </div>
            
            <div class="form-group">
            <label for="text">Texte du chapitre</label>
            <textarea class="form-control chapitre" name="content" rows="20" placeholder="Chapitre entier" required="required"></textarea>
            </div>
            <input type="submit" formnovalidate="formnovalidate" name="add" value="Enregistrer le brouillon" class="btn btn-warning">
			<input type="submit" formnovalidate="formnovalidate" name="edit" value="Publier" class="btn btn-success">
        </form>
        </div>
    
    </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


