<php session_start();?>

echo here: 1
<?php var_dump($_SESSION['username']); ?>
<br>
echo here: 2
<?php var_dump($_SESSION['items']);?>
<br>
echo here: 3
<?php var_dump($items);?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/title.php'; ?>
        </div>

<?php echo $_SESSION['username']; ?>  
              
        <!-- SECOND DIV--COMMENT:  main inventory     -->
        <div class="main2" >  
            <?php include 'modules/inventory.php'; ?>                    
        </div>
      
    </div>
</main>

