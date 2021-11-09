<link rel="stylesheet" href="../styles/index.css">

<?php include "../includes/header.inc.php"; ?>

<body>
    <?php include "../includes/navbar.inc.php"; ?>
    
    <div id="bgOpacity"></div>
    <div class="container col-5 rounded-3 p-4" id="loginContainer">
        <h1 class="alert-heading text-center mb-3">Login</h1>

        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floating_eID" name="eID" placeholder="Name">
                <label for="floating_eID" class="col-form-label">eID</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword" class="col-form-label">Password</label>
            </div>

            <input type="submit" value="Login" class="btn btn-dark w-100">
        </form>
    </div>
</body>

<?php include "../includes/footer.inc.php"; ?>