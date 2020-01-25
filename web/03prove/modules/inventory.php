<?php
session_start();
$username = $_SESSION["username"];
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
$items = $_SESSION["items"];
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
vardump here post items:
<?php var_dump($_POST['items']);?>
<br>
vardump here items:
<?php var_dump($items);?>
<br>
vardump here session items:
<?php var_dump($_SESSION['items']);?>
<br>
vardump here session selection1:
<?php var_dump($_SESSION['selection1']);?>

<!--  inventory <div></div>  -->
<br>
<?php
    if(empty($items)) 
        {
        echo "<br />";
        echo("You didn't select any items.");
        echo "<br />";
        echo "<br />";
        } 
    else {
        echo "<br />";
        $N = count($items);
        echo("You selected $N items(s): ");
        echo "<br />";
        for($i=0; $i < $N; $i++)
                {
                echo($items[$i] . "");
                echo ":  Added to Cart";
                $_SESSION["$selection[$i]"] = $items[$i];
                echo "<br />";
                }
        echo "<br />";
        }
?>

 <!-- only do form if POST items is not set  -->
<form method="post" action="">
    <div >          
        <!-- <input type="submit" >  -->
        <button type="submit" name="addbutton" value="addbutton"><img src="images/addbutton.jpg" alt="addbutton"></button>      
        <br><br>
    </div>
    <div class="grouping">

        <div class="art">
            <div><a  class="item" href="../03prove/modules/dog1.php" title="dog1" >Item 1</a></div>       
            <input class=“largerCheckbox” type="checkbox" id="item1" name="items[]" value="item1">
            <br>
            <div><img   src="images/dog1.jpg"  alt= "dog1"  /> </div>
            <label for="item1">Item 1 - $10</label>
        </div>
        <br><br>

        <div class="art">   
            <div><a class="item" href="../03prove/modules/dog2.php" title="dog2" >Item 2</a> </div>
            <input class=“largerCheckbox” type="checkbox" id="item2" name="items[]" value="item2">
            <br>
            <div><img  src="images/dog2.jpg"  alt= "dog2"  /> </div>
            <label for="item2">Item 2 - $20</label>
        </div>
        <br><br>

        <div class="art">    
            <div><a class="item"  href="../03prove/modules/cat1.php" title="cat1" >Item 3</a></div>
            <input class=“largerCheckbox” type="checkbox" id="item3" name="items[]" value="item3">
            <br>
            <div><img  src="images/cat1.jpg"  alt= "cat1"  /> </div>
            <label for="item3">Item 3 - $30</label>
        </div>       
        <br><br>

        <div class="art">    
            <div><a class="item"  href="../03prove/modules/cat2.php" title="cat2" >Item 4</a></div>            
            <input class=“largerCheckbox” type="checkbox" id="item4" name="items[]" value="item4">
            <br>
            <div><img  src="images/cat3.jpg"  alt= "cat3"  /> </div>
            <label for="item4">Item 4 - $40</label>
        </div>
    </div>    
</form>


  
