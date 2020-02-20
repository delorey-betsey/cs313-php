<?php
echo "entering admin";
session_start();
if (isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
	}
	else
	{
		header("Location: signIn.php");
		die();  
	}
if (isset($_SESSION['newArtistID']) && isset($_SESSION['newArtistName']))
	{
		$newArtistID = $_SESSION['newArtistID'];
		$newArtistName = $_SESSION['newArtistName'];
	}
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Boogaloo|Dosis" rel="stylesheet">
    
</head>

<body>
<div>
	<?php echo "You are signed in as: $username"; ?>
	<br /><br />
	<h1>Welcome to ARfS Admin</h1>
	<br><br>
	
</div>
	<br><br>
	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>