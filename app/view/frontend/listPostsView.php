<!DOCTYPE html>
<html>
    <head>
        <title>Jean Forteroche</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../../web/bootstrap/css/bootstrap-theme.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../../web/bootstrap/css/custom.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php $title = 'Billet simple pour l\'Alaska'; ?>



        <div class="container-fluid">
            <header class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10">
                    <h1>Bienvenue sur mon blog !</h1><br /><br />
                    <p>Vous aller pouvoir y découvrir régulièrement des épisodes de mon
                        nouveau livre " Billet simple pour l'Alaska". N'hésitez pas à commenter. Je serais très heureux
                        d'avoir votre retour. Je vous souhaite une bonne lecture.</p>
                </div>
                <div class="col-lg-1"></div>
            </header>
            <br /><br /><br />

            <section class="blog-container">
                <div class="row blog-card col-lg-4">
                    <?php
                    while ($data = $posts->fetch()) {
                        ?>

                        <div class="title-content">
                            <h3>
                                <?= htmlspecialchars($data['title']) ?><br/>
                            </h3>
                            <div class="intro"> <a href="#"></a> Episode <?= $data['id'] ?> </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['content'])) ?>
                                <br /><br /><br />
                            </p> 
                            <a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite<span class="licon icon-arr icon-black"></span></a>
                        </div>
                        <div class="utility-info">
                            <ul class="utility-list">
                                <li><span class="licon icon-com"></span><a href="#">12</a></li>
                                <li><span class="licon icon-dat"></span><em> <?= $data['creation_date_fr'] ?></em></li>
                            </ul>
                        </div>
                        <div class="gradient-overlay"></div>
                        <div class="color-overlay"></div>
                        <?php
                    }
                    $posts->closeCursor();
                    ?>
                </div><!-- /.blog-card -->
                <div class="row blog-card col-lg-4">
                    <?php
                    while ($data = $posts->fetch()) {
                        ?> 

                        <div class="title-content">
                            <h3>
                                <?= htmlspecialchars($data['title']) ?><br/>
                            </h3>
                            <div class="intro"> <a href="#">Inspiration</a> </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['content'])) ?>
                                <br /><br /><br />

                            </p> 
                            <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
                        </div>
                        <div class="utility-info">
                            <ul class="utility-list">
                                <li><span class="licon icon-like"></span><a href="#">2</a></li>
                                <li><span class="licon icon-com"></span><a href="#">12</a></li>
                                <li><span class="licon icon-dat"></span><em> <?= $data['creation_date_fr'] ?></em></li>
                            </ul>
                        </div>
                        <div class="gradient-overlay"></div>
                        <div class="color-overlay"></div>
                        <?php
                    }
                    $posts->closeCursor();
                    ?>
                </div><!-- /.blog-card -->
                <div class="row blog-card col-lg-4">
                    <?php
                    while ($data = $posts->fetch()) {
                        ?> 

                        <div class="title-content">
                            <h3>
                                <?= htmlspecialchars($data['title']) ?><br/>
                            </h3>
                            <div class="intro"> <a href="#">Inspiration</a> </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['content'])) ?>
                                <br /><br /><br />

                            </p> 
                            <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
                        </div>
                        <div class="utility-info">
                            <ul class="utility-list">
                                <li><span class="licon icon-like"></span><a href="#">2</a></li>
                                <li><span class="licon icon-com"></span><a href="#">12</a></li>
                                <li><span class="licon icon-dat"></span><em> <?= $data['creation_date_fr'] ?></em></li>
                            </ul>
                        </div>
                        <div class="gradient-overlay"></div>
                        <div class="color-overlay"></div>
                        <?php
                    }
                    $posts->closeCursor();
                    ?>
                </div><!-- /.blog-card -->
            </section>
            <div class="row">

                <?php
                while ($data = $posts->fetch()) {
                    ?>
                    <section class="col-xs-12 col-md-12">
                        <!-- Titre du chapitre -->
                        <div class="row title">
                            <div class="col-xs-12 col-md-offset-2 col-md-4">
                                <div class="wrapper">
                                    <div class="">
                                        <h3>
                                            <?= htmlspecialchars($data['title']) ?><br/>
                                            <em> <?= $data['creation_date_fr'] ?></em>
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
                    </section>

                    <?php
                }
                $posts->closeCursor();
                ?>

            </div>
            <div class="blog-card col-lg-4">
                <?php
                while ($data = $posts->fetch()) {
                    ?> 

                    <div class="title-content">
                        <h3>
                            <?= htmlspecialchars($data['title']) ?><br/>
                        </h3>
                        <div class="intro"> <a href="#">Inspiration</a> </div>
                    </div>
                    <div class="card-info">
                        <p>
                            <?= nl2br(htmlspecialchars($data['content'])) ?>
                            <br /><br /><br />

                        </p> 
                        <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
                    </div>
                    <div class="utility-info">
                        <ul class="utility-list">
                            <li><span class="licon icon-like"></span><a href="#">2</a></li>
                            <li><span class="licon icon-com"></span><a href="#">12</a></li>
                            <li><span class="licon icon-dat"></span><em> <?= $data['creation_date_fr'] ?></em></li>
                        </ul>
                    </div>
                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                    <?php
                }
                $posts->closeCursor();
                ?>
            </div><!-- /.blog-card -->
        </div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script> 

    </body>
</html>