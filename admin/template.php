<?php
    include_once("includes/head.php");

?>
    <body class="sb-nav-fixed">
    <?php
    include_once("includes/topnav.php");

    ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidenav.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1>Hello</h1>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php
            include_once("includes/script.php");
        ?>
    </body>
</html>
