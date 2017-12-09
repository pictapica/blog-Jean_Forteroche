<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    
}
?>
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

        <link rel="stylesheet" href="../../../web/bootstrap/css/login_form.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    </head>


    <body>
        <div id="login-button">
            <img src="../../../web/images/user.png" alt ="login">
        </div>
        <div id="container">
            <h1>Connexion</h1>
            

            <form action="../../../app/controler/login.php" method="post">
                <input type="text" name="pseudo" placeholder="Pseudo">
                <input type="password" name="pass" placeholder="Mot de Passe">
                <input type="submit" name="connect" value="Connexion" class="btn-connect">
                <div>
                    <a class="home_link" href ="../../../web/index.php">Retour à l'accueil du site</a>
                </div>
            </form>
        </div>
        
        
        <script>
            $('#login-button').click(function () {
                $('#login-button').fadeOut("slow", function () {
                    $("#container").fadeIn();
                    TweenMax.from("#container", .4, {scale: 0, ease: Sine.easeInOut});
                    TweenMax.to("#container", .4, {scale: 1, ease: Sine.easeInOut});
                });
            });

            

           
        </script>

    </body>
</html>