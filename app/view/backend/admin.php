<?php
session_start();?>
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

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Jean FORTEROCHE</h3>        
                </div>
                <!-- Sidebar Links -->
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="index.php" data-toggle="collapse"  aria-expanded="false">
                            <i class="glyphicon glyphicon-book">&nbsp</i>Billets</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="index.php">Tous les billets</a></li>
                            <li><a href="#">Ajouter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="list-group-item active" data-toggle="collapse">
                            <i class="glyphicon glyphicon-picture">&nbsp</i>Médias</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Tous les billets</a></li>
                            <li><a href="#">Ajouter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="chapters.php" class="list-group-item active">
                            <i class="glyphicon glyphicon-comment">&nbsp</i>Commentaires</a>
                        <a href="chapters.php" class="list-group-item active">
                            <i class="glyphicon glyphicon-exclamation-sign">&nbsp</i>Modération</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="col-xs-10 col-md-10">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            
                            
                            <a href="../../../web/chapters.php">Aller sur le site</a> 
                          
                            <div class="btn navbar-btn ">
                                <a class="btn btn-custom" href="#">DECONNEXION</a>
                            </div>
                        </div>

                    </div>
                </nav>
                <?php include 'home.php';?>
            </div>
        </div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
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
