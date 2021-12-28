<link rel="stylesheet" href="../styles/details.css">
<script src="../js/details.js"></script>

<?php include "../includes/header.inc.php"; ?>

<body style="background: none;">
    <?php
        session_start();
        include "../includes/navbar.inc.php";

        $firstName = $_POST["name"];
        $lastName = $_POST["surname"];
        $telephone = $_POST["telephone"];
    
        // Address
        $street = $_POST["street"];
        $house = $_POST["houseNo"];
        $postCode = $_POST["postCode"];
        $town = $_POST["town"];
    
        // Account Details
        $eID = $_POST["eID"];
        $avatar = $_POST['avatar_existing'];

        if (isset($_POST["editDetails"])) {
            if (
                strcmp($firstName, $_SESSION["user"]->getName()) == 0 &&
                strcmp($lastName, $_SESSION["user"]->getSurname()) == 0 &&
                strcmp($telephone, $_SESSION["user"]->getTelephone()) == 0 &&
                strcmp($street, $_SESSION["user"]->getStreetName()) == 0 &&
                strcmp($house, $_SESSION["user"]->getHouse()) == 0 &&
                strcmp($postCode, $_SESSION["user"]->getPostCode()) == 0 &&
                strcmp($town, $_SESSION["user"]->getTown()) == 0 &&
                strcmp($avatar, $_SESSION["user"]->getImage()) == 0
            ) {
                header("Location: ../views/details.php");
                exit();
            }
    
            header("Location: ../includes/editDetails.inc.php?name=$firstName&surname=$lastName&telephone=$telephone&street=$street&houseNo=$house&postCode=$postCode&town=$town&eID=$eID&avatar_existing=$avatar");
        }
    ?>

    <div class="d-lg-flex mb-3 mb-lg-0">
        <div class="col-12 col-lg-5 rounded-3 m-lg-4 p-4 text-dark" id="loginContainer">
            <div class="d-md-flex d-lg-flex align-items-center justify-content-between">
                <h1 class="alert-heading mb-3">My Account</h1>
                
                <div class="d-md-flex d-lg-flex align-items-center mb-3 mb-md-0 mb-lg-0">
                    <button class="btn btn-primary me-1 mb-2 mb-md-0 mb-lg-0 col-12 col-md col-lg" id="editDetails">Edit</button>
                    <button class="btn btn-danger w-100" id="deleteAccount">Delete Account</button>
                </div>
            </div>
            
            <div class="alert alert-danger p-4 d-none position-fixed top-50 start-50 translate-middle" style="z-index: 1" id="deleteConfirmation">
                <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
                <hr>
                
                <p><span class="text-uppercase tex-danger fw-bold">WARNING:</span> All of your data will be permanently removed!</p>
                
                <form action="../includes/deleteAccount.inc.php" method="get" class="d-flex justify-content-start align-items center">
                    <input type="hidden" name="eID" value="<?php echo $_SESSION['user']->get_eId(); ?>">
                    <input type="submit" class="btn btn-danger me-2 col" value="Yes" name="delete_yes">
                    <input type="submit" class="btn btn-danger col" value="No" name="delete_no">
                </form>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <fieldset class="mb-3">
                    <legend>Personal Details</legend>
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control fw-bold" id="floatingName" name="name" placeholder="Name" required value="<?php echo $_SESSION['user']->getName();  ?>" readonly>
                            <label for="floatingName" class="col-form-label">Name</label>
                        </div>

                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control fw-bold" id="floatingSurname" name="surname" placeholder="Surname" required value="<?php echo $_SESSION['user']->getSurname();  ?>" readonly>
                            <label for="floatingSurname" class="col-form-label">Surname</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="phoneCode">+356</span>
                            <input type="number" class="form-control fw-bold" name="telephone" placeholder="Telephone" required value="<?php echo $_SESSION['user']->getTelephone();  ?>" readonly>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="mb-3">
                    <legend>Address</legend>
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control fw-bold" id="floatingStreet" name="street" placeholder="Street" required value="<?php echo $_SESSION['user']->getStreetName();  ?>" readonly>
                            <label for="floatingStreet" class="col-form-label">Street</label>
                        </div>

                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control fw-bold" id="floatingHouseNo" name="houseNo" placeholder="House No." required value="<?php echo $_SESSION['user']->getHouse();  ?>" readonly>
                            <label for="floatingHouseNo" class="col-form-label">House No.</label>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control fw-bold" id="floatingPostCode" name="postCode" placeholder="Post Code" required value="<?php echo $_SESSION['user']->getPostCode();  ?>" readonly>
                            <label for="floatingPostCode" class="col-form-label">Post Code</label>
                        </div>

                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control fw-bold" id="floatingTown" name="town" placeholder="Town" required value="<?php echo $_SESSION['user']->getTown();  ?>" readonly>
                            <label for="floatingTown" class="col-form-label">Town</label>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Account Details</legend>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control fw-bold" id="floating_eID" name="eID" placeholder="Name" required value="<?php echo $_SESSION['user']->get_eID();  ?>" readonly>
                        <label for="floating_eID" class="col-form-label">eID</label>
                    </div>

                    <?php if (!empty($_SESSION['user']->getImage())) { ?>
                        <div class="my-3">
                            <label class="h4 fw-normal">Profile Picture</label>
                            <img src="<?php echo $_SESSION['user']->getImage(); ?>" class="img-thumbnail" alt="" />
                        </div>
                    <?php } ?>

                    <div class="row g-0 mb-3 d-none" id="editImage">
                        <input type="file" class="form-control" name="avatar">
                        <input type="hidden" name="avatar_existing" value="<?php echo $_SESSION['user']->getImage();  ?>">
                    </div>
                </fieldset>

                <input type="submit" value="Apply Changes" name="editDetails" class="btn btn-dark w-100 d-none" id="applyChanges">
            </form>

            <form action="<?php echo $cdViews; ?>includes/logout.inc.php" method="post" class="position-0 m-0">
                <input class="btn btn-warning text-white col-12 fs-3 fw-bold" aria-current="page" id="logout" href="<?php echo $cdViews; ?>index.php" name="logout" type="submit" value="Logout" />
            </form>
        </div>
        
        <div class="rightCol d-none d-lg-flex" id="bgOpacity"></div>
    </div>
    
    <?php include "../includes/footer.inc.php"; ?>
</body>