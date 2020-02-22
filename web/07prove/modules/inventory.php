<?php
session_start();
if(isset($_POST['items']))
{
    $items = $_POST['items'];
    $_SESSION['items'];
} 
 if(isset($_SESSION["selections"]))
{
    $sessions_selections = $_SESSION["selections"];
} 
echo "$ items = ";
echo "<br>";
var_dump ($items);
echo "<br>";
echo "$ sessions_selections = ";
echo "<br>";
var_dump ($sessions_selections);
echo "<br>"; 
?>
<!--  inventory  -->
<?php
    if(empty($items)) 
        {
        echo("All proceeds benefit Dane County Humane Society.");
        } 
        else {
            $N = count($items);
            echo("You selected $N items(s): ");
            echo "<br />";
            for($i=0; $i < $N; $i++)
                    {
                    echo($items[$i] . "");
                    echo ":  Added to Cart";
                    $sessions_selections[$i] = $items[$i];
                    echo "<br />";
                    }
            echo "<br />";
            $_SESSION["selections"] = $sessions_selections;
            }
?>

<?php
require "dbConnect.php";
$db = get_db();
 
$stmt = $db->prepare('SELECT a.artid, a.brief, a.title, a.price, a.thumb, a.fullsize, u.displayname 
FROM art a JOIN userarfs u ON a.artist = u.userid 
WHERE a.soldDT IS NULL'); 
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
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1title" >
            <?php include 'modules/title.php'; ?>
        </div>
        <div class="dosisxlite">
            <?php
            echo("Please select checkboxes. <br>Then press Add to Cart.<br><br>");
            ?>
        </div>
    <div>        
        <!-- COMMENT:  ARTWORK     -->
        <form method="post" action="">

        <div class="tanbackground">
                <button type="submit" name="addbutton" value="addbutton"><img class="button" src="images/addbutton.jpg" alt="addbutton"></button>      
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
                    
                        if(in_array($artid,$items,TRUE)) 
                        {
                            echo "checking checked";
                            $checking = 'unchecked'; 
                        } else
                        {
                            echo "checking UNchecked";
                            $checking ='unchecked';
                        }                        

                        echo   "<input class='largerCheckbox' type='checkbox' id='item1' 
                                    name='items[]' value='$artid' checked='$checking' >";                    


                        // if(!empty($items))
                        // {
                        //     echo("Items empty/");
                        // } else
                        //     if($items['$artid'] ="checked")  echo "checked='checked'";
                        //     }

                        // if(items['$artid']) == 'checked' 
                        //     {
                        //     checked='checked'
                        //     }
                        // echo "if(isset($_POST['items'])) {if $items['artid'] = checked  {checked='checked'}}";   
                        
                        // if(!empty($items)) 
                        // {
                        // echo("checked = 'checked'");
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
			?>
            <br><br><br>                  
        </div>
        </form>      
    </div>
</main>
</html>


  
