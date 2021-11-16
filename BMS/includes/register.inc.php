<?php
session_start();

if (isset($_POST["register"])) {
    if (isset($_SESSION["ERROR"])) {
        echo "<script>alert('$_SESSION[ERROR]');</script>";
        unset($_SESSION["ERROR"]);
        header("refresh:0;url= ../views/register.php");
    }
    
    // Personal Details
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
    $password = $_POST["password"];
    $confirmation = $_POST["confirmPassword"];
    $avatar = $_POST["avatar"];
    $image = "../images/profile-pictures/{$_FILES['avatar']['name']}";

    include_once "../includes/autoloader.inc.php";
    
    $registerController = new RegisterController($firstName, $lastName, $telephone, $street, $house, $postCode, $town, $eID, $password, $confirmation, $image, "fabian");
    $registerController->register();
    
    unset($_SESSION["ERROR"]);
    header("Location: ../index.php");
}
