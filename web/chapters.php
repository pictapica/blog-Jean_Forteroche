<!DOCTYPE html>
<html>
    <head>
        <title>Jean Forteroche</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="bootstrap/css/custom.css">
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
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="images/logowhite.png" width="250" alt="Jean Forteroche">         
                </div>
                <h4>Billet simple pour l'Alaska</h4><br/>
                <ul class="list-unstyled components">
                    <li>
                        <a href="../index.php">ACCUEIL</a>
                        <a href="../app/view/frontend/about.php">A PROPOS</a>
                        <a href="chapters.php">CHAPITRES</a>
                    </li>
                </ul>
                <br/>
                <a href="../app/view/frontend/login.php" class="login_link">Administration</a><br /><br /><br /><br />
                <a href="../app/view/frontend/inscription.php" class="login_link2">Inscription</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                
                <?php
                require('../app/controler/frontend.php');
                try { // On essaie de faire des choses
                    if (isset($_GET['action'])) {
                        if ($_GET['action'] == 'listPosts') {
                            listPosts();
                        } elseif ($_GET['action'] == 'post') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                post();
                            } else {
                                // Erreur ! On arrête tout, on envoie une exception, donc on saute directement au catch
                                throw new Exception('Aucun identifiant de billet envoyé');
                            }
                        } elseif ($_GET['action'] == 'addComment') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                                    // ajouter 
                                addComment($_GET['id'], $_POST['author'], $_POST['comment'], $_POST['moderation'] = 0);
                                } else {
                                    // Autre exception
                                    throw new Exception('Tous les champs ne sont pas remplis !');
                                }
                            } else {
                                // Autre exception
                                throw new Exception('Aucun identifiant de billet envoyé');
                            }
                        }
                    } else {
                        listPosts();
                    }
                } catch (Exception $e) {
                    echo 'Erreur : ' . $e->getMessage();
                }
                ?>
                <div class="cRetour"></div>
            </div>
        </div>
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
