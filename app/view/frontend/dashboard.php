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

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="../../../web/images/logowhite.png" width="250" alt="Jean Forteroche">         
                </div>
                <h4>Tableau de bord</h4><br/>

                <ul class="list-group">

                    <li>
                        <a href="index.php" class="list-group-item active">BILLETS<span class="badge">20</span></a>
                        <a href="#" class="list-group-item active">MEDIAS</a>
                        <a href="chapters.php" class="list-group-item active">COMMENTAIRES</a>
                        <a href="chapters.php" class="list-group-item active">MODERATION</a>
                    </li>
                </ul>
                <br/>
                <a href="../app/view/frontend/login.php" class="login_link">Administration</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="col-lg-10">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <ul class="nav navbar-nav">
                                <li class="active"> <a href="#">Accueil</a> </li>
                                <li> <a href="#">Liens</a> </li>
                                <li> <a href="#">Témoignages</a> </li>
                                <li class="disabled"> <a href="#">Références</a> </li>
                            </ul> 
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="btn btn-group navbar-btn pull-right">
                                    <a class="btn btn-info navbar-btn" href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;</a>
                                    <a class="btn btn-info navbar-btn" href="#">2</a>
                                    <a class="btn btn-info navbar-btn" href="#">3</a>
                                </div>
                            </div>
                        
                            
                        </div>
                    </div>
                </nav>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Titre</h3>
                    </div>
                    <div class="panel-body">Contenu</div>
                    <div class="panel-footer">Pied de panneau</div>
                </div>

                <h1>TinyMCE Quick Start Guide</h1>
                <form method="post">
                    <textarea id="mytextarea">Hello, World!</textarea>
                </form>
            </div>
        </div>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    </body>
</html>