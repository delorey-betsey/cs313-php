<?php
$id = htmlspecialchars($_GET['id']);
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT displayname, bio, pic FROM userarfs WHERE userid = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<body>    
<!-- COMMENT:  flexbox header and nav    -->   
<?php include 'common/header.php'; ?>
<?php include 'common/nav.php'; ?>

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
                // Go through each result
                foreach ($artists as $artist)
                {
                    $name    = $artist['displayname'];
                    $bio     = $artist['bio'];
                    $pic     = $artist['pic'];                    
                    echo "<li><h3>$name</h3></li>";
                    echo "<li><p>$bio</p></li>";
                }
                ?>
            </ul> 
            <br>
            <div class=biopic ><img src="<?php echo $pic; ?>" alt="pet picture" />
            </div>                   
        </div>      
    </div>
</main>

<!-- COMMENT:  flexbox bottom nav and footer  -->  
<?php include 'common/nav.php'; ?>
<?php include 'common/footer.php'; ?>
</body>
</html>