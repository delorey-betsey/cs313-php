<php session_start();?>

echo here: 1
<?php var_dump($_SESSION['username']); ?>
<br>
echo here: 2
<?php var_dump($_SESSION['items']);?>
<br>
echo here: 3
<?php var_dump($items);?>

<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <?php include 'modules/logo.php'; ?>
    </div>    
    <div class="main1" id="welcome" >Welcome to ARfS!      
    </div>    
</header>

