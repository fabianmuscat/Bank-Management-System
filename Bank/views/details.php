<?php include "../includes/header.inc.php"; ?>

<body>
    <?php
        session_start();
        include "../includes/navbar.inc.php"; 
    ?>

    <div id="bgOpacity" class="position-absolute" style="z-index: -1; filter: opacity(30%);"></div>
    
    <div class="container my-3 col-8 offset-2">
        <div class="row g-0 mb-3">
            <div class='bg-dark rounded text-light col p-3 mx-1'>
                <h3>User Details for <i><?php echo "{$_SESSION['name']} {$_SESSION['surname']}";  ?></i></h3>
                <hr>
                <h5>ID Number: <span class="h6"><?php echo $_SESSION['eID']; ?></span></h5>
                <h5>Telephone: <span class="h6">+356 <?php echo $_SESSION['telephone']; ?></span></h5>
                <h5>Address: <span class="h6"><?php echo $_SESSION['address'];  ?></span> </h5>
            </div>
        </div>
    </div>
</body>

<?php include "../includes/footer.inc.php"; ?>