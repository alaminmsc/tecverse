<?php
    include("class/function.php");
    session_start();
    $id = $_SESSION['adminID'];
    if($id == null){
        header("location: index.php");
    }

?>
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
                        <?php 
                            include_once('includes/contact_messg.php')                                                    ;
                        ?>
                    </div>
                </main>
            <?php include_once('includes/footer.php'); ?>
            </div>
        </div>
        <?php
            include_once("includes/script.php");
        ?>
    </body>
</html>
