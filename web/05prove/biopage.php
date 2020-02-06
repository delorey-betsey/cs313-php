<?php
$id = htmlspecialchars($_GET['id']);
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT displayname, bio, pic FROM userarfs WHERE userid = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump ($artists);
?>
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/titleartistbio.php'; ?>
        </div>
        
        <!-- SECOND DIV--COMMENT:  artists list     -->
        <div class="main2" >  
        <ul>
			<?php
            var_dump ($artists);
            // Go through each result
            foreach ($artists as $artist)
			{
				$name    = $artist['displayname'];
                $bio     = $artist['bio'];
                $pic     = $artist['pic'];
                echo $name;
                echo $bio;
                echo $pic;

			}

			?>
		</ul>                    
        </div>
      
    </div>
</main>