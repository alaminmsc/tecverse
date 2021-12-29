<?php

    include("class/function.php");
    $objAdmin= new tecverse();

    if(isset($_POST['admin_login'])){
        $objAdmin->admin_login($_POST);
    }

    session_start();
    $id = $_SESSION['adminID'];
    if($id){
        header("location: template.php");
    }


?>

<?php
    include_once('includes/head.php');
?>
<body>
    <div style="width:800px; margin:0 auto;">
    <h1>TECVERSE Admin Panel</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="admin_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="admin_pass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="admin_login">Login</button>
        </form>
    </div>
    <?php
        include_once('includes/script.php');
    ?>
</body>
</html>