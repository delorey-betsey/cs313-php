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
	<?php 
		echo "<h2>ADD NEW ARTIST</h2>";
		echo "<br>";
		// <!-- <form class="formdiv" id="mainForm" action="" method="POST"> -->
		echo "<form class="formdiv" id="mainForm" action="addartist.php" method="POST">";

		echo "<label for="userName">User name:</label>";
		echo "<input type="text" id="userName" name="newuserName"></input>";			
		echo "<br /><br />";

		echo "<label for="userPassword">User password:</label>";
		echo "<input type="text" id="userPassword" name="newuserPassword"></input>";
		echo "<br /><br />";

		echo "<label for="displayName">User display name:</label>";
		echo "<input type="text" id="displayName" name="newdisplayName"></input>";
		echo "<br /><br />";

		echo "<label for="pic">Picture file name:</label>";
		echo "<input type="text" id="pic" name="newpic"></input>";
		echo "<br /><br />";

		echo "<label for="bio">Short user bio:</label>";
		echo "<input type="text" id="bio" name="newbio"></input>";
		echo "<br /><br />";
		echo "<br />";

		echo "<input type="submit" value="Add to Database" />";
		echo "</form>";
	?>	
</div>
	<br><br>
	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>