<?php ob_start(); ?>

<div class="container-fluid">
<section class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h3>
                Jean FORTEROCHE<br />
            </h3>
            <h4><em> A propos</em></h4><br /><br/>
            <p>
                content<br /><br/>
            </p>
        </div>
        <div class="col-lg-1"></div>
</section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); 
