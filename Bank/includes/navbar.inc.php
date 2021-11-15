<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container-fluid">
        <?php if (!isset($_SESSION['authenticated'])) { ?>
            <a class="navbar-brand" href="../pages/index.php">
                <div class="d-flex align-items-center">
                    <i class="bi bi-bank me-2"></i>
                    <span class="m-0">Bank</span>
                </div>
            </a>
        <?php } else { ?>
            <a class="navbar-brand" href="../pages/details.php">
                <div class="d-flex align-items-center">
                    <i class="bi bi-bank me-2"></i>
                    <span class="m-0">Bank</span>
                </div>
            </a>
        <?php } ?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex w-100 justify-content-start align-items-center">

                <?php if (!isset($_SESSION['authenticated'])) { ?>
                    <a class="nav-link" aria-current="page" href="../pages/index.php">Login</a>
                    <a class="nav-link" aria-current="page" href="../pages/register.php">Register</a>
                <?php } else { ?>
                    <form action="../includes/logout.inc.php" method="post" class="position-0 m-0">
                        <input class="nav-link btn btn-link" aria-current="page" href="../pages/index.php" name="logout" type="submit" value="Logout" />
                    </form>

                    <div class="w-100 align-self-center">
                        <a class="nav-link float-end p-0" aria-current="page" href="../pages/details.php">
                            <?php if (empty($_SESSION["avatar"])) { ?>
                                <img src="../images/user-default.png" alt="" class="rounded-circle" width="36" height="36">
                            <?php } else { ?>
                                <img src="<?php echo $_SESSION['avatar']; ?>" alt="Profile Pic" class="rounded-circle" width="36" height="36">
                            <?php } ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>