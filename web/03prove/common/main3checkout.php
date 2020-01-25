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
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titlecheckout.php'; ?>            
        </div>

        <?php echo $_SESSION['username']; ?>

        <h3> Ship To info: </h3>
        <br><br>

        <form method="post" action="confirmationpage.php">        
            Number: <input type="text" name="number"> 
            <br><br>
            Street: <input type="text" name="street"> 
            <br><br>            
            City: <input type="text" name="city"> 
            <br><br>
            State: <input type="text" name="state"> 
            <br><br>
            Zip: <input type="text" name="zip"> 
            <br><br>
            <input type="submit">
        </form>    
             
    </div>
</main>

