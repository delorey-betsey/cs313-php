<?php
session_start();
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
?>

<header>   
    <!-- COMMENT:  logo     -->
 
        <div class="logo" class="border" class="sticky">
            <?php include 'modules/logo.php'; ?>
        </div>
    
        <div class="main1welcome" id="welcome" >Welcome to ARfS!      
        </div>

</header>

