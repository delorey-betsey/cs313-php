<?php
    session_start();
    $username = $_SESSION['username'];

    $items = $_POST["items"];
    $_SESSION["items"] = $items;  
    
    $new_page = "cartpage.php";
    header("Location: $new_page");
    die();

?>
