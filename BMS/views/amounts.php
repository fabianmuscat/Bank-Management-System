<h1 class="alert-heading mb-3">Accounts</h1>

<?php 
$totalAmount = 0;
foreach ($_SESSION['accounts'] as $account)
    $totalAmount += $account->getBalance();
?>

<div class="alert alert-danger">
    <h4 class="alert-heading fw-bold p-0 m-0">Number of Accounts: <span class="fw-normal"><?php echo count($_SESSION['accounts']); ?></span></h4>
    <hr>
    <h5>Total Amount: &euro;<?php echo $totalAmount; ?></h5>
</div>

<?php foreach ($_SESSION['accounts'] as $account) { ?>
    <div class="mb-3">
        <form action="../includes/register.inc.php" method="post">
            <fieldset class="mb-3">
                <div class="form-floating mb-3 col">
                    <input type="text" class="form-control fw-bold" id="floatingIban" name="iban" placeholder="IBAN" required readonly value="<?php echo $account->getIban(); ?>">
                    <label for="floatingIban" class="col-form-label">IBAN</label>
                </div>
                
                <div class="row g-0">
                    <div class="form-floating mb-3 col me-1">
                        <input type="text" class="form-control fw-bold" id="floatingAccountType" name="accountType" placeholder="Account Type" required readonly value="<?php echo $account->getDescription(); ?>">
                        <label for="floatingAccountType" class="col-form-label">Account Type</label>
                    </div>
    
                    <div class="form-floating mb-3 col ms-1">
                        <input type="text" class="form-control fw-bold" id="floatingOtherName" name="otherName" placeholder="Other Name" required readonly value="<?php echo $account->getOtherName(); ?>">
                        <label for="floatingOtherName" class="col-form-label">Other Name</label>
                    </div>
                </div>
    
                <div class="form-floating mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="phoneCode">Balance</span>
                        <input type="text" class="form-control fw-bold" name="balance" placeholder="Balance" required value="&euro;<?php echo $account->getBalance(); ?>" readonly>
                    </div>
                </div>
            </fieldset>
        </form>
    
        <div class="d-flex align-items-center justify-content-end">
            <button class="btn btn-primary me-1" id="editDetails">Edit</button>
            <button class="btn btn-danger" id="deleteAccount">Close Account</button>
        </div>
    </div>
<?php } ?>