<?php
require "dbConnect.php";
$db = get_db();
$cat = 'cat';
$stmt = $db->prepare('SELECT a.artid, a.brief, a. title, a.price, a.thumb, a.fullsize, u.displayname FROM art a JOIN userarfs u ON a.artist = u.userid WHERE a.title = :title'); 
$stmt->bindValue(':title', $cat, PDO::PARAM_STR);
$stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ARFs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo|Dosis" rel="stylesheet">
    </head>
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/titlecats.php'; ?>
        </div>
        
        <!-- SECOND DIV--COMMENT:  CAT ARTWORK     -->
        <div class="grouping" >  
        <ul>
            <?php
                // Go through each result                
                foreach ($cats as $cat)
                    {
                    echo "<div class='art'>";
                    $artid      = $cat['artid'];
                    $artist     = $cat['displayname'];
                    $brief      = $cat['brief'];
                    $price      = $cat['price'];
                    $thumb      = $cat['thumb'];
                    $fullsize   = $cat['fullsize'];

                    echo "<div><a  class="item" href=$fullsize title=$artid >$artid</a></div>";       
                    echo "<br>";
                    echo "<input class='largerCheckbox' type='checkbox' id=$artid name='items[$artid]' value=$artid>";
                    echo "<br>";
                    echo "<div><img src="$thumb"  alt='cat picture'/></div>";            
                    echo "<br>";
                    echo "$price";

                    echo "</div>";
                    }                
			?>
		</ul> 
        <br><br> <br>                  
        </div>
      
    </div>
</main>
</html>
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

