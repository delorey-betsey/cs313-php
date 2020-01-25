<?php
session_start();
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
$items = $_SESSION["items"];
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titlecheckout.php'; ?>            
        </div>

<div class="addtocart">
    <div></div>
    <div >          
        <!-- <input type="submit" >  -->
        <button type="submit" name="submitbutton" value="subbutton"><img src="images/submitbutton.jpg" alt="submitbutton"></button>      
        <br><br>
    </div>
</div>
        
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

        <div >          
    </form>
    <br><br>
    </div>
</main>

