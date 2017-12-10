<?= include 'header.php'; ?>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <?= include 'sidebar.php'; ?>

    <!-- Page Content Holder -->
    <div id="content" class="col-xs-10 col-md-10">
        <?= include 'navbar.php'; ?>
        <?= $content ?>
        <div class="cRetour"></div>
    </div>
</div>

}
<footer>
    <div class="row" style="margin-left: auto; margin-right: auto;">
        
        <div class="col-xs-12 col-lg-12 footer">
            <div><abbr>Copyright Jean Forteroche 2017 - <a href="mentions">Mentions légales</a> </abbr></div>
    	</div>
</footer>
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
