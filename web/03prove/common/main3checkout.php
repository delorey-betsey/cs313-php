<?php
    session_start();     
?>
<?php echo $_SESSION['username'];?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titlecheckout.php'; ?>            
        </div>

        <?php echo $SESSION['username'];?>
                
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

