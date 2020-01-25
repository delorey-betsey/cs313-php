<?php
session_start();
$username = "betsey";
$_SESSION["username"] = $username;
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
?>

echo here username:
<?php echo $username; ?>
<br>
echo here session username:
<?php echo $_SESSION['username']; ?>
<br>
vardump here session username:
<?php var_dump($_SESSION['username']); ?>
<br>
vardump here items:
<?php var_dump($items);?>
<br>
vardump here session items:
<?php var_dump($_SESSION['items']);?>
<br>
vardump here session selection1:
<?php var_dump($_SESSION['selection1']);?>


<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <?php include 'modules/logo.php'; ?>
    </div>
    
    <div class="main1" id="welcome" >Welcome to ARfS!      
    </div>
</header>

