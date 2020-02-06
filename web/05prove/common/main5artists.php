<?php

echo 'arriving main5artists from artistpage';

require "dbConnect.php";
$db = get_db();

$stmt = $db->prepare('SELECT userid, displayname FROM userarfs WHERE typeID = :artistid');
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
                var_dump ($artists);
                // Go through each result
                foreach ($artists as $artist)
                    {
                    $id         = $artist['userid'];
                    echo "<h3>***</h3>";
                    echo $id;
                    }
			?>
		</ul>                    
        </div>
      
    </div>
</main>

