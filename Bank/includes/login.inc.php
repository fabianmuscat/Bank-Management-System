<?php
session_start();

if (isset($_POST["login"])) {
    if (isset($_SESSION["ERROR"])) {
        echo "<script>alert('$_SESSION[ERROR]');</script>";
        unset($_SESSION["ERROR"]);
        header("refresh:0;url= ../index.php");
    }
    
    $eId = $_POST["eID"];
    $password = $_POST["password"];
    
    include_once "../includes/autoloader.inc.php";
    $loginController = new LoginController("fabian");
    $user = $loginController->login($eId, $password);
    
    $address = nl2br("\n{$user->getHouse()},\n{$user->getStreetName()},\n{$user->getTown()},\n{$user->getPostCode()}");
    
    $_SESSION['authenticated'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['eID'] = $user->get_eId();
    $_SESSION['name'] = $user->getName();
    $_SESSION['telephone'] = $user->getTelephone();
    $_SESSION['surname'] = $user->getSurname();
    $_SESSION['address'] = $address;
    $_SESSION["avatar"] = $user->getImage();

    unset($_SESSION["ERROR"]);
    header("Location: ../views/details.php");
}