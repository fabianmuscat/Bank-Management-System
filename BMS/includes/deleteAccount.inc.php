<?php
    if (isset($_GET["delete_no"])) {
        header("Location: ../views/details.php");
        exit();
    }
    
    $eID = $_GET["eID"];
    include_once "../includes/autoloader.inc.php";
    
    $deleteController = new DeleteController("fabian");
    $res = $deleteController->delete($eID);

    if ($res == false) {
        echo "<script>alert('Accounted couldn\'t be deleted');</script>";
        header("refresh:0;url= ../views/details.php");
    }
    
    header("Location: ./logout.inc.php");