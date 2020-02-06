<?php

echo 'arriving main5artists from artistpage';

require "dbConnect.php";
$db = get_db();

$stmt = $db->prepare('SELECT userID, displayName FROM userArfs WHERE typeID = :artistid');
$stmt->bindValue(':artistid', 2, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo 'main5artists';
var_dump ($artists);
?>


<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/titleartists.php'; ?>
        </div>
        
        <!-- SECOND DIV--COMMENT:  artists list     -->
        <div class="main2" >  
        <ul>
			<?php
			// Go through each result
			foreach ($artists as $artist)
			{
				$userID         = $artist['userID'];
                $displayName    = $artist['displayName'];
                echo "<h3>***</h3>";
                echo "<h3>$userID</h3>";
                echo "<h3>***</h3>";
                echo "<h3>$displayName</h3>";
                echo "<h3>***</h3>";
				echo "<li><h3><a href='biopage.php?userID=$userID'>$displayName</a><h3></li>";
			}
			?>
		</ul>                    
        </div>
      
    </div>
</main>

