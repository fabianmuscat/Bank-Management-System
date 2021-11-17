<?php
    include "../includes/autoloader.inc.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS <?php echo isset($_SESSION['authenticated']) ? "| {$_SESSION['user']->getName()} {$_SESSION['user']->getSurname()}" : ""; ?></title>

    <link rel="icon" href="../images/transaction.png">
    <?php include_once "resources.inc.php" ?>
</head>

