<?php
session_start();
$username = $_SESSION["username"];
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
$items = $_SESSION["items"];
?>

<!--  inventory <div></div>  -->
<?php
    if(empty($items)) 
        {
        echo("All proceeds benefit Dane County Humane Society.");
        echo "<br>";
        echo("Please select items by checkboxes. Then press Add to Cart.");
        echo "<br>";
        } 
    else {
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

<?php
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT a.artid, a.brief, a.title, a.price, a.thumb, a.fullsize, u.displayname FROM art a JOIN userarfs u ON a.artist = u.userid'); 
$stmt->execute();
$inventory = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ARfS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo|Dosis" rel="stylesheet">
    </head>
<main>
    <div>        
        <!-- COMMENT:  CAT ARTWORK     -->
        <form method="post" action="">

        <div >
            <!-- <div></div> -->
            <!-- <div >           -->
                <!-- <input type="submit" >  -->
                <button type="submit" name="addbutton" value="addbutton"><img src="images/addbutton.jpg" alt="addbutton"></button>      
                <!-- <br><br> -->
            <!-- </div> -->
        </div>
        
        <div class="grouping" >  
            <?php
                foreach ($inventory as $item)
                {
                    echo "<div class='art'>";

                        $artid      = $item['artid'];
                        $artist     = $item['displayname'];
                        $brief      = $item['brief'];
                        $price      = $item['price'];
                        $thumb      = $item['thumb'];
                        $fullsize   = $item['fullsize'];

                        // // echo "<div><a  class="item" href="../05prove/modules/full.php" title="item" >Item</a></div>";
                        // echo "<div><br>Item Number: $artid  </div>";
                        // echo "<div><br>Created by:  $artist </div>";
                        // echo "<div><br>Description: $brief  </div>";
                        // echo "<div><br>Price:       $price  </div>";
                        // echo "<div><input type="checkbox" class=“largerCheckbox” name=$artid value=$artid>
                        //       <label for=$artid>$artid</label></div>";
                        // echo "<div><a href=$fullsize><img src=$thumb alt= $brief></a> </div>";
                        // echo "<br>";
                        echo "<div><br>Item Number: #$artid  </div>";
                        echo "<div>Created by:  $artist </div>";
                        echo "<div>Description: $brief  </div>";
                        echo "<div>Price:       $price  </div>";
                        echo "<br>";
                        echo "(Click thumbnail for fullsize image.)";
                        echo "<div><a  class='item' <a href=$fullsize><img src=$thumb alt= $brief></a></div>";       
                        echo "<input class='largerCheckbox' type='checkbox' id='item1' name='items[]' value='item $artid'>";   
                        echo "Check box to add to cart.";  
                        echo "<label for=artid>#$artid - $price</label>";   
                        
                    echo "</div>";
                }               
			?>
            <br><br><br>                  
        </div>
        </form>      
    </div>
</main>
</html>


  
