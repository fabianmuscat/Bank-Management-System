<link rel="stylesheet" href="../styles/register.css">
<?php  include "../includes/header.inc.php"; ?>

<body style="background: none;">
    <?php include "../includes/navbar.inc.php"; ?>
    
    <div class="d-flex">
        <div class="col-5 rounded-3 m-4 p-4 text-dark" id="loginContainer">
            <h1 class="alert-heading mb-3">Register</h1>
    
            <form action="../includes/register.inc.php" method="post" enctype="multipart/form-data">
                <fieldset class="mb-3">
                    <legend>Personal Details</legend>
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Name" required>
                            <label for="floatingName" class="col-form-label">Name</label>
                        </div>
    
                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control" id="floatingSurname" name="surname" placeholder="Surname" required>
                            <label for="floatingSurname" class="col-form-label">Surname</label>
                        </div>
                    </div>
    
                    <div class="form-floating mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="phoneCode">+356</span>
                            <input type="number" class="form-control" name="telephone" placeholder="Telephone" required>
                        </div>
                    </div>
                </fieldset>
                
                <fieldset class="mb-3">
                    <legend>Address</legend>
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control" id="floatingStreet" name="street" placeholder="Street" required>
                            <label for="floatingStreet" class="col-form-label">Street</label>
                        </div>
    
                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control" id="floatingHouseNo" name="houseNo" placeholder="House No." required>
                            <label for="floatingHouseNo" class="col-form-label">House No.</label>
                        </div>
                    </div>
                    
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="text" class="form-control" id="floatingPostCode" name="postCode" placeholder="Post Code" required>
                            <label for="floatingPostCode" class="col-form-label">Post Code</label>
                        </div>
    
                        <div class="form-floating mb-3 col ms-1">
                            <input type="text" class="form-control" id="floatingTown" name="town" placeholder="Town" required>
                            <label for="floatingTown" class="col-form-label">Town</label>
                        </div>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Account Details</legend>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floating_eID" name="eID" placeholder="Name" required>
                        <label for="floating_eID" class="col-form-label">eID</label>
                    </div>
    
                    <div class="row g-0">
                        <div class="form-floating mb-3 col me-1">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword" class="col-form-label">Password</label>
                        </div>
    
                        <div class="form-floating mb-3 col ms-1">
                            <input type="password" class="form-control" id="floatingConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                            <label for="floatingConfirmPassword" class="col-form-label">Confirm Password</label>
                        </div>
                    </div>

                    <div class="row g-0 mb-3">
                        <label class="col-form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="avatar">
                    </div>
                </fieldset>
    
                <input type="submit" value="Register" name="register" class="btn btn-dark w-100">
            </form>
        </div>
        <div class="rightCol" id="bgOpacity"></div>
    </div>

</body>

<?php include "../includes/footer.inc.php" ?>
