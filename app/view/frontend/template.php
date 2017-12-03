<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="../web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../web/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../web/bootstrap/css/bootstrap-grid-min.css">
        <link rel="stylesheet" href="../web/bootstrap/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../web/bootstrap/css/custom.css"> 
    </head>
        
    <body>
        <?= $content ?>
        
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