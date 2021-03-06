<?php
session_start();

if(isset($_POST['items']))
{
    $items = $_POST['items'];
} 
?>

<!--  inventory  -->
<?php
    echo("All proceeds benefit Dane County Humane Society.");
    echo "<br>"; 
    if(!empty($items)) 
        {
            $N = count($items);
            echo "<br />";
            echo("$N item(s) added to cart: ");
            echo "<br />";
            for($i=0; $i < $N; $i++)
                    {
                    echo($items[$i] . "");
                    echo "<br />";
                    }          
            }
?>
 
<!-- <?php
if(isset($_SESSION["selections"]))
{
    echo "<br />";
    $selections = $_SESSION["selections"];
    $N = count($selections);
    echo("Total items in cart: $N");
    echo "<br />";
    for($i=0; $i < $N; $i++)
    {
        echo($selections[$i] . "");
        echo "<br />";
        }
        echo "<br>";           
} 
?> -->

<?php
require "dbConnect.php";
$db = get_db();
$dog = 'dog';
$stmt = $db->prepare('SELECT a.artid, a.brief, a.title, a.price, a.thumb, a.fullsize, u.displayname 
FROM art a JOIN userarfs u ON a.artist = u.userid 
WHERE a.title = :title AND a.soldDT IS NULL'); 
$stmt->bindValue(':title', $dog, PDO::PARAM_STR);
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
<main class="main2">
<!-- FIRST DIV--COMMENT:  main title     -->
<div class="main1title" >
            <?php include 'modules/titledogs.php'; ?>
        </div>
        <!-- <div class="dosisxlite">
            <?php
            echo("Please select checkboxes. <br>Then press Add to Cart.<br><br>");
            ?>
        </div> -->
    <div>        
        <!-- COMMENT:  DOG ARTWORK     -->
        <form method="post" action="">

        <!-- <div class="tanbackground">
                <button type="submit" name="addbutton" value="addbutton"><img class="button" src="images/addbutton.jpg" alt="addbutton"></button>      
       </div> -->
        
        <div class="grouping" >  
            <?php
            
            // echo "<br>";         
            // echo "-----------"; 
            // echo "<br>";  
            // echo "$ items = ";
            // echo "<br>";
            // var_dump ($items);
            
            // echo "<br>";
            // echo "All selections: ";
            // echo "<br>";
            // var_dump ($selections);
            
            // echo "<br>"; 
            // echo "session_selections:";
            // echo "<br>";
            // var_dump ($_SESSION["selections"]);
            // echo "<br>"; 
            // echo "-----------";   

                foreach ($dogs as $dog)
                {
                    echo "<div class='art'>";

                        $artid      = $dog['artid'];
                        $artist     = $dog['displayname'];
                        $brief      = $dog['brief'];
                        $price      = $dog['price'];
                        $thumb      = $dog['thumb'];
                        $fullsize   = $dog['fullsize'];

                        // if(in_array("item $artid",$items,TRUE)) 
                        // {   echo "hola";
                        //     echo "<input class='largerCheckbox' type='checkbox' id='item1' name='items[]' value='item $artid' checked>"; 
                        // } else
                        // {   echo "adios";
                        //     echo "<input class='largerCheckbox' type='checkbox' id='item1' name='items[]' value='item $artid'>";
                        // }                       
                        echo "<label for=artid>#$artid - $price</label>"; 
                        echo "<div><a  class='item' <a href=$fullsize><img src=$thumb alt= $brief></a></div>";   
                        echo "(Click thumbnail for fullsize image.)";
                        echo "<div><br>Item Number: #$artid  </div>";
                        echo "<div>Created by:  $artist </div>";
                        echo "<div>Description: $brief  </div>";
                        echo "<div>Price:       $price  </div>";                        
                    echo "</div>";
                }  
            // $_SESSION["items"] = $items;        
			?>
            <br><br><br>                  
        </div>
        </form>      
    </div>
</main>
</html>


  
