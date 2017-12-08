<!DOCTYPE html>
<html>
    <head>
        <title>Jean Forteroche</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap-theme.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="web/bootstrap/css/custom.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    </head>

    <body>
        <a name="haut" id="haut"></a>
        <?= $content ?>
        <div class="cRetour"></div>
        <script>
            jQuery(document).ready(function () {
                var duration = 500;
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > 100) {
                        // Si un défillement de 100 pixels ou plus.
                        // Ajoute le bouton
                        jQuery('.cRetour').fadeIn(duration);
                    } else {
                        // Sinon enlève le bouton
                        jQuery('.cRetour').fadeOut(duration);
                    }
                });

                jQuery('.cRetour').click(function (event) {
                    // Un clic provoque le retour en haut animé.
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })
            });
        </script>


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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                window.onscroll = function (ev) {
                    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
                };
            });
        </script>

    </body>


</html>