<?php
session_start();
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
?>

<header class="border">   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <?php include 'modules/logo.php'; ?>
    </div>
   
    <div class="main1welcome" id="welcome" >Welcome to ARfS!      
    </div>
</header>

