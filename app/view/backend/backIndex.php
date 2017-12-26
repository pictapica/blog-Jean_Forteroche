<?php session_start(); ?>
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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
        <a name="haut" id="haut"></a>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'sidebar.php'; ?>

            <!-- Page Content Holder -->
            <div id="content" class="col-xs-10 col-md-10">
                <?php include 'navbar.php'; ?>
                <?php
               
                include ('app/controler/backend.php');

                try { 
                    if (isset($_GET['action'])) {
                        if ($_GET['action'] == 'listPosts') {
                            listPosts();
                        } elseif ($_GET['action'] == 'post') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                post();
                            } /**elseif ($_GET['action'] == 'addChapter') {
                                if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    addChapter();
                                } elseif ($_GET['action'] == 'deleteChapter') {
                                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                                        deleteChapter();
                                    } elseif ($_GET['action'] == 'updateChapter') {
                                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                                            updateChapter();
                                        } **/else {
                                            // Erreur ! On arrête tout, on envoie une exception, donc on saute directement au catch
                                            throw new Exception('Aucun identifiant de billet envoyé');
                                        }
                                    } elseif ($_GET['action'] == 'updateComment') {
                                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                                            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                                                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                                            } else {
                                                // Autre exception
                                                throw new Exception('Tous les champs ne sont pas remplis !');
                                            }
                                        } else {
                                            // Autre exception
                                            throw new Exception('Aucun identifiant de billet envoyé');
                                        }
                                    } 
                                }
                            }catch (Exception $e) {
                    echo 'Erreur : ' . $e->getMessage();
                }
                ?>

            </div>
        </div>
        <!--jQuery CDN -->
        <script src = "https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

    </body>
</html>
