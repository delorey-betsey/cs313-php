<?php
    session_start();     
    $_SESSION['username'] = 'betsey';
    echo $_SESSION['username'];
?>
 
<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <?php include 'modules/logo.php'; ?>
    </div>
        
    <div class="main1" id="welcome" >Welcome to ARfS!      
    </div>
</header>

