<?php
    include_once('includes/head.php');
?>
<body>
    <div style="width:800px; margin:0 auto;">
    <h1>TECVERSE Admin Panel</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <?php
        include_once('includes/script.php');
    ?>
</body>
</html>