<?php

require "dbConnect.php";
$db = get_db();

$stmt = $db->prepare('SELECT userID, displayName FROM userArfs WHERE typeID = :artistid');
$stmt->bindValue(':artistid', 2, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo 'main5artists';
echo $artists;
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
				$userID = $artist['userID'];
                $displayName = $artist['displayName'];
				echo "<li><h3><a href='biopage.php?userID=$userID'>$displayName</a><h3></li>";
			}
			?>
		</ul>                    
        </div>
      
    </div>
</main>

