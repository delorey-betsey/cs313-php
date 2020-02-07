<?php
require "dbConnect.php";
$db = get_db();
$cat = 'cat';
$stmt = $db->prepare('SELECT a.artid, a.brief, a.title, a.price, a.thumb, a.fullsize, u.displayname FROM art a JOIN userarfs u ON a.artist = u.userid WHERE a.title = :title'); 
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
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/titlecats.php'; ?>
        </div>
        
        <!-- SECOND DIV--COMMENT:  CAT ARTWORK     -->
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

                        echo "<div><br>Item Number: $artid  </div>";
                        echo "<div><br>Created by:  $artist </div>";
                        echo "<div><br>Description: $brief  </div>";
                        echo "<div><br>Price:       $price  </div>";
                        echo "<div><img src=$thumb alt= $brief /> </div>";
                        echo "<br>";

                    echo "</div>";
                }               
			?>
            <br><br><br>                  
        </div>      
    </div>
</main>
</html>
