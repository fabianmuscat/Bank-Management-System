<link rel="stylesheet" href="../styles/details.css">
<script src="../js/details.js"></script>

<?php include "../includes/header.inc.php"; ?>

<body style="background: none;">
    <?php
        session_start();
        include "../includes/navbar.inc.php"; 
    ?>

    <div class="d-flex">
        <div class="col-5 rounded-3 m-4 p-4 text-dark" id="loginContainer">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="alert-heading mb-3">My Account</h1>
                
                <div class="d-flex align-items-center">
                    <button class="btn btn-primary me-1" id="editDetails">Edit</button>
                    <button class="btn btn-danger">Delete Account</button>
                </div>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
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
                    
                    <div class="row g-0 mb-3 d-none" id="editImage">
                        <label class="col-form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="avatar">
                    </div>

                    <?php if (!empty($_SESSION['user']->getImage())) { ?>
                        <div class="my-3">
                            <label class="h4 fw-normal">Profile Picture</label>
                            <img src="<?php echo $_SESSION['user']->getImage(); ?>" class="img-thumbnail" alt="" />
                        </div>
                    <?php } ?>
                </fieldset>

                <input type="submit" value="Apply Changes" name="edit" class="btn btn-dark w-100 d-none" id="applyChanges">
            </form>
        </div>
        
        <div class="rightCol" id="bgOpacity"></div>
    </div>
    </div>
</body>

<?php include "../includes/footer.inc.php"; ?>