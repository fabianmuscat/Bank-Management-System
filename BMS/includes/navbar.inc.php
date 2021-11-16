<?php 
    session_start();
    $cdViews = !file_exists("../views") ? "./" : "../";
    $cdImages = !file_exists("../images") ? "./" : "../";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo !isset($_SESSION['authenticated']) ?  $cdViews . "index.php" : $cdViews . "views/details.php"; ?>">
            <div class="d-flex align-items-center">
                <i class="bi bi-piggy-bank me-2"></i>
                <span class="m-0">Bank Management System</span>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex w-100 justify-content-start align-items-center">

                <?php if (!isset($_SESSION['authenticated'])) { ?>
                    <a class="nav-link" aria-current="page" href="<?php echo $cdViews; ?>index.php">Login</a>
                    <a class="nav-link" aria-current="page" href="<?php echo $cdViews; ?>views/register.php">Register</a>
                <?php } else { ?>
                    <form action="<?php echo $cdViews; ?>includes/logout.inc.php" method="post" class="position-0 m-0">
                        <input class="nav-link btn btn-link" aria-current="page" href="<?php echo $cdViews; ?>index.php" name="logout" type="submit" value="Logout" />
                    </form>

                    <div class="w-100 align-self-center">
                        <a class="nav-link float-end p-0 d-flex align-items-center justify-content-between" aria-current="page" href="../views/details.php">
                            <label class="me-2" style="cursor: pointer;">
                                <?php echo "{$_SESSION['user']->getName()} {$_SESSION['user']->getSurname()}" ?>
                            </label>
                            <?php if (empty($_SESSION["avatar"])) { ?>
                                <img src="<?php echo $cdImages; ?>images/user-default.png" alt="" class="rounded-circle" width="38" height="38">
                            <?php } else { ?>
                                <img src="<?php echo $_SESSION['avatar']; ?>" alt="Profile Pic" class="rounded-circle" width="38" height="38">
                            <?php } ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>