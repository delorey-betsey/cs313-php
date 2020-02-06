<?php
echo 'entering biopage';
$id = htmlspecialchars($_GET['id']);
echo $id;

require "dbConnect.php";
$db = get_db();

$stmt = $db->prepare('SELECT displayName, bio, pic FROM userArfs WHERE userid = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
				$name    = $artist['displayname'];
                $bio     = $artist['bio'];
                $pic     = $artist['pic'];

                echo "<h3>$name</h3>";
                echo "<li><p>$bio</p></li>";
                echo "<li><div><img src="$pic" alt= "pet picture" /></div></li>";
			}
			?>
		</ul>                    
        </div>
      
    </div>
</main>