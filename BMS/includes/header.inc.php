<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    
    <?php 
        $cdStyles = !file_exists("../styles") ? "./" : "../";
        $cdScripts = !file_exists("../scripts") ? "./" : "../";
        
        $styles = array(
            "styles/common.css",
            "styles/bootstrap/bootstrap.css",
            "styles/bootstrap-icons/font/bootstrap-icons.css"
        );
        
        $scripts = array();
        
        foreach ($styles as $style)
            echo "<link rel='stylesheet' href='$cdStyles$style'>";

        foreach ($scripts as $script)
            echo "<script src='$cdScripts$script' />";
    ?>
</head>

<?php include "../includes/autoloader.inc.php"; ?>