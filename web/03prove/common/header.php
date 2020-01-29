<?php
session_start();
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
?>

<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <?php include 'modules/logo.php'; ?>
    </div>
    betsey
    <div class="main1" id="welcome" >Welcome to ARfS!      
    </div>
</header>

