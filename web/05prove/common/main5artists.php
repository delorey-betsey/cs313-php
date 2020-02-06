<?php
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT userid, displayname FROM userarfs WHERE typeID = :artistid');
$stmt->bindValue(':artistid', 2, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                    $id     = $artist['userid'];
                    $name   = $artist['displayname'];
                    echo "<li><h3><a href='biopage.php?userID=$id'>$name</a><h3></li>";
                    }
			?>
		</ul>                    
        </div>
      
    </div>
</main>

