<?php
session_start();
$username = $_SESSION["username"];
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



<main>
    <div>
    <p>All proceeds benefit Dane County Humane Society.</p>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/title.php'; ?>
        </div>
              
        <!-- SECOND DIV--COMMENT:  main inventory     -->
        <div class="main2" >  
            <?php include 'modules/inventory.php'; ?>                    
        </div>
      
    </div>
</main>

