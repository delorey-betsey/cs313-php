<?php
session_start();
$items = $_SESSION["items"];
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
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titlecheckout.php'; ?>            
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

            <input type="submit">
            <br><br><br><br>
            
        </form>   
    </div>
</main>

