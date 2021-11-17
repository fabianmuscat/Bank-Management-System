<?php
session_start();

if (isset($_SESSION["ERROR"])) {
    echo "<script>alert('$_SESSION[ERROR]');</script>";
    unset($_SESSION["ERROR"]);
    header("refresh:0;url= ../views/details.php");
}

// Personal Details
$firstName = $_GET["name"];
$lastName = $_GET["surname"];
$telephone = $_GET["telephone"];

// Address
$street = $_GET["street"];
$house = $_GET["houseNo"];
$postCode = $_GET["postCode"];
$town = $_GET["town"];

// Account Details
$eID = $_GET["eID"];
$avatar = $_GET['avatar_existing'];
$image = empty($_FILES['avatar']['name']) ? $avatar : "../images/profile-pictures/{$_FILES['avatar']['name']}";

include_once "../includes/autoloader.inc.php";

$registerController = new RegisterController($firstName, $lastName, $telephone, $street, $house, $postCode, $town, $eID, "", "", $image, "fabian");
$registerController->edit();

unset($_SESSION["ERROR"]);
header("Location: ./logout.inc.php");