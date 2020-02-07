<?php
require "dbConnect.php";
$db = get_db();
$cat = 'cat';
echo ($cat);
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
        betsey main
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/titlecats.php'; ?>
        </div>
        
        <!-- SECOND DIV--COMMENT:  CAT ARTWORK     -->
        <div class="grouping" >  
        <ul>
            <?php
                foreach ($cats as $cat)
                {
                // echo "<div class='art'>";
                $artid      = $cat['artid'];
                $artist     = $cat['displayname'];
                $brief      = $cat['brief'];
                $price      = $cat['price'];
                $thumb      = $cat['thumb'];
                $fullsize   = $cat['fullsize'];

                echo $artid;
                echo "<br>";
                echo $artist;
                echo "<br>";
                echo $brief;
                echo "<br>";
                echo $price;
                echo "<br>";
                echo $thumb;
                echo "<br>";
                echo $fullsize;
                }               
			?>
		</ul> 
        <br><br><br>                  
        </div>
      
    </div>
</main>
</html>
