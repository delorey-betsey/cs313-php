<?php
session_start();

if(isset($_POST['items']))
{
    $items = $_POST['items'];
} 
if(isset($_SESSION["selections"]))
{
     
} 
?>

<!--  inventory  -->
<?php
    echo("All proceeds benefit Dane County Humane Society.");
    echo "<br />";
    if(!empty($items)) 
        {
            $N = count($items);
            echo("$N item(s) added to cart: ");
            echo "<br />";
            for($i=0; $i < $N; $i++)
                    {
                    echo($items[$i] . "");
                    $_SESSION["selections"][] = $items[$i];
                    echo "<br />";
                    }          
            }
?>
 
<?php
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
?>

<?php
require "dbConnect.php";
$db = get_db();
$cat = 'cat';
$stmt = $db->prepare('SELECT a.artid, a.brief, a.title, a.price, a.thumb, a.fullsize, u.displayname 
FROM art a JOIN userarfs u ON a.artist = u.userid 
WHERE a.title = :title  AND a.soldDT IS NULL');  
$stmt->bindValue(':title', $cat, PDO::PARAM_STR);
$stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <?php include 'modules/titlecats.php'; ?>
        </div>
        <div class="dosisxlite">
            <?php
            echo("Please select checkboxes. <br>Then press Add to Cart.<br><br>");
            ?>
        </div>
    <div>        
        <!-- COMMENT:  CAT ARTWORK     -->
        <form method="post" action="">

        <div  class="tanbackground" >
                <button type="submit" name="addbutton" value="addbutton"><img src="images/addbutton.jpg" alt="addbutton"></button>      
        </div>
        
        <div class="grouping" >  
            <?php
                foreach ($cats as $cat)
                {
                    echo "<div class='art'>";

                        $artid      = $cat['artid'];
                        $artist     = $cat['displayname'];
                        $brief      = $cat['brief'];
                        $price      = $cat['price'];
                        $thumb      = $cat['thumb'];
                        $fullsize   = $cat['fullsize'];
                    
                        echo "<input class='largerCheckbox' type='checkbox' id='item1' name='items[]' value='item $artid'>";                          
                        echo "<label for=artid>#$artid - $price</label>"; 
                        echo "<div><a  class='item' <a href=$fullsize><img src=$thumb alt= $brief></a></div>";   
                        echo "(Click thumbnail for fullsize image.)";
                        echo "<div><br>Item Number: #$artid  </div>";
                        echo "<div>Created by:  $artist </div>";
                        echo "<div>Description: $brief  </div>";
                        echo "<div>Price:       $price  </div>";                        
                    echo "</div>";
                }               
			?>
            <br><br><br>                  
        </div>
        </form>      
    </div>
</main>
</html>


  
