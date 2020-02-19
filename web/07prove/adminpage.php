<?php
session_start();
if (isset($_SESSION['newArtistID']))
	{
		$newArtistID    = $_SESSION['newArtistID'];
        $newArtistName  = $_SESSION['newArtistName'];
	}
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

<?php
    echo "in adminpage headed to admin";
    echo "New artist $newArtistName has been added: ID = $newArtistID ";
?>

    <!-- COMMENT:  flexbox main     -->  
    <div class="main2" >
        <?php include 'admin.php'; ?>
    </div>

    <!-- COMMENT:  flexbox bottom nav and footer  -->  
    <?php include 'common/nav.php'; ?>
    <?php include 'common/footer.php'; ?>

</body>
</html>

