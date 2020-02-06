<?php
echo 'entering main6cats';
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
        <div class="main2" >  
        <ul>
            <?php
            var_dump ($cats);
                // Go through each result
                
                foreach ($cats as $cat)
                    {
                    echo "<div>";
                    $artid      = $cat['artid'];
                    $artist     = $cat['displayname'];
                    $brief      = $cat['brief'];
                    $price      = $cat['price'];
                    $thumb      = $cat['thumb'];
                    $fullsize   = $cat['fullsize'];
                    echo $artid;
                    echo $artist;
                    echo $brief;
                    echo $price;
                    echo $thumb;
                    echo $fullsize;

                    // echo "<li><h3><a href='biopage.php?id=$id'>$name</a><h3></li>";
                    echo "</div>";
                    }                
			?>
		</ul> 
        <br><br> <br>                  
        </div>
      
    </div>
</main>
</html>

