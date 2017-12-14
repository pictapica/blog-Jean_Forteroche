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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    </head>
    <body>
        <a name="haut" id="haut"></a>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="../../../web/images/logowhite.png" width="250" alt="Jean Forteroche">
                </div>
                <h4>Billet simple pour l'Alaska</h4><br/>
                <ul class="list-unstyled components">
                    <li>
                        <a href="../../../web/index.php">ACCUEIL</a>
                        <a href="about.php">A PROPOS</a>
                        <a href="../../../web/chapters.php">CHAPITRES</a>
                    </li>
                </ul>
                <br/>
                <a href="../app/view/frontend/inscription.php" class="login_link2">Inscription</a><br /><br /><br /><br />
                <a href="../app/view/frontend/login.php" class="login_link">Administration</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class=" jumbotron">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <div class="container2">
                    <h2></h2>
                    <p>Bla bla bla</p>
                </div>


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
        <!-- jQuery CDN -->

    </body>
</html>



