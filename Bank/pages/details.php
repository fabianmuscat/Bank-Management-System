<?php include "../includes/header.inc.php"; ?>

<body style="background: none;">
    <?php
        include "../includes/navbar.inc.php";
        $db = new BankManager("fabian", "", "localhost", "bank");
    ?>
    
    <div class="container my-3 col-8 offset-2">
        <div class="alert alert-primary">
            <h3 class="alert-heading">
                <?php echo $db->connect(); 
                $db->addUser(new User("3", "333075M", "Shaun", "Cardona", "79793626", "Triq ta Gawhar", "Hoopoe Flat 1", "SFI1511", "birzebbuga"));
                ?>
            </h3>
        </div>

        <div class="row g-0 mb-3">
        <?php 
            $users = $db->getUsers();
            foreach ($users as $user) { ?>
                <div class='bg-dark rounded text-light col p-3 mx-1'>
                    <h3>User Details for <i><?php echo $user->getFullName(); ?></i></h3>
                    <hr>
                    <h5>ID Number: <span class="h6"><?php echo $user->get_eId(); ?></span></h5>
                    <h5>Telephone: <span class="h6">+356 <?php echo $user->getTelephone(); ?></span></h5>
                    <h5>Address: <span class="h6"><?php echo $user->getAddress(); ?></span> </h5>
                </div>
        <?php } ?>
        </div>


        <div class="alert alert-primary">
            <h3 class="alert-heading">
                <?php echo $db->close(); ?>
            </h3>
        </div>
    </div>
</body>

<?php include "../includes/footer.inc.php"; ?>