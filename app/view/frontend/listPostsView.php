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
                    <h1>BILLET SIMPLE POUR L'ALASKA</h1><br /><br />
                    <p>J'ai voulu ce blog telle une page blanche. Simple, sobre, épuré.  
                        Rien ne vous distraira dans votre lecture à part peut-être la
                        frustration de ne pas pouvoir lire le chapitre suivant... 
                        Vous allez pouvoir découvrir ici les épisodes de mon
                        nouveau livre. Il s'agira 
                        pour moi de vous poster le plus régulièrement possible 
                        les chapitres qui constitueront ce roman pour
                        que vous puissiez suivre ma progression.  
                        N'hésitez pas à commenter, je serais très heureux
                        d'avoir votre retour. Bonne lecture à vous.
                        J'ai voulu ce blog comme une page blanche. Simple, sobre, 
                        rien ne vous dérangera dans votre lecture à part peut-être la 
                        frustration de ne pas pouvoir lire le chapitre suivant...</p>
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
                            <div class="intro"> <a href="#"></a>  </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['extrait'])) ?>...
                                <br /><br /><br />
                            </p> 
                            <a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite<span class="licon icon-black"></span></a>
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
                            <div class="intro"> <a href="#"></a>  </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['extrait'])) ?>...
                                <br /><br /><br />
                            </p> 
                            <a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite<span class="licon icon-black"></span></a>
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
                            <div class="intro"> <a href="#"></a>  </div>
                        </div>
                        <div class="card-info">
                            <p>
                                <?= nl2br(htmlspecialchars($data['extrait'])) ?>...
                                <br /><br /><br />
                            </p> 
                            <a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite<span class="licon icon-black"></span></a>
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
            </section>


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