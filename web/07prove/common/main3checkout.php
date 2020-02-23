<?php
session_start();
if(isset($_SESSION['items'])){
    $items = $_SESSION['items'];
    }
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1title" >
            <?php include 'modules/titlecheckout.php'; ?>            
        </div>

        <?php
            if(empty($items)) 
                {
                echo("You didn't select any items.");
                echo "<br />";
                echo "<br />";
                } 
        ?>

    <!-- <div class="addtocart">
        <div></div>
        <div></div>
    </div> -->
        
        <h3> Ship To info: </h3>
        <br>
    
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

        <button type="submit" name="submitbutton" value="submitbutton"><img  class="button" src="images/submitbutton.jpg" alt="submitbutton"></button>      
        </form>
        <br><br>
    </div>
</main>

