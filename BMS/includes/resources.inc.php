<?php
    $cdStyles = !file_exists("../styles") ? "./" : "../";
    $cdScripts = !file_exists("../scripts") ? "./" : "../";
    $cdImages = !file_exists("../images") ? "./" : "../";
    
    $styles = array(
        "styles/common.css",
        "styles/bootstrap/bootstrap.css",
        "styles/bootstrap-icons/font/bootstrap-icons.css",
        "styles/font-awesome.min.css"
    );
    
    $scripts = array(
        "js/bootstrap.bundle.js",
        "js/jquery-3.3.1.slim.min.js"
    );

    echo "<link rel='icon' href='$cdImages" . "images/transaction.png'>";
    
    foreach ($styles as $style)
        echo "<link rel='stylesheet' href='$cdStyles$style' />";
    
    foreach ($scripts as $script)
        echo "<script src='$cdScripts$script'></script>";