<?php
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
		$newArtistID   = $_SESSION['newArtistID'];
		$newArtistName = $_SESSION['newArtistName'];
	}
if (isset($_SESSION['newArtworkID']) && isset($_SESSION['newArtworkTitle']))
	{
		$newArtworkArtist 	= $_SESSION['newArtworkArtist'];
		$newArtworkID 		= $_SESSION['newArtworkID'];
		$newArtworkTitle 	= $_SESSION['newArtworkTitle'];
	}
if (isset($_SESSION['updatemsg']))
{
	$updatemsg = $_SESSION['updatemsg'];
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
	<?php echo "You are signed in as: $username";?>
	<br />
	<h1>Welcome to ARfS Admin</h1>
	<br>
	<?php 
	if (isset($_SESSION['newArtistID']))
		{
		echo "**New artist $newArtistName has been added.";
		echo "ID #: $newArtistID";
		echo "<br><br>";
		}
	if (isset($_SESSION['newArtworkID']))
		{
		echo "**Art for Sale added for Artist ID #: $newArtworkArtist";
		echo '<br>';
		echo "Item #: $newArtworkID";	
		echo '<br>';
		echo "Item title: $newArtworkTitle";
		echo "<br><br>";
		}
	if (isset($_SESSION['updatemsg']))
	{
		echo $updatemsg;
		echo "<br><br>";
	}
	?>
		<h2>ADD NEW ARTIST</h2>
		<br>
		<form class="formdiv" id="mainForm" action="addartist.php" method="POST">

			<label for="userName">User name:</label>
			<input type="text" id="userName" name="newuserName"></input>			
			<br /><br />

			<label for="userPassword">User password:</label>
			<input type="text" id="userPassword" name="newuserPassword"></input>
			<br /><br />

			<label for="displayName">User display name:</label>
			<input type="text" id="displayName" name="newdisplayName"></input>
			<br /><br />

			<label for="pic">Picture file name:</label>
			<input type="text" id="pic" name="newpic"></input>
			<br /><br />

			<label for="bio">Short user bio:</label>
			<input type="text" id="bio" name="newbio"></input>
			<br /><br />
			<br />

			<input type="submit" value="Add New Artist" />
		</form>
		<br><br>

	<h2>ADD NEW ARTWORK</h2>
		<br>
		<form class="formdiv" id="mainForm" action="addartwork.php" method="POST">

			<label for="artistID">Artist ID:</label>
			<input type="text" id="artistID" name="artistID"></input>			
			<br /><br />

			<label for="title">Title:</label>
			<input type="text" id="title" name="title"></input>
			<br /><br />

			<label for="brief">Brief description:</label>
			<input type="text" id="brief" name="brief"></input>
			<br /><br />

			<label for="price">Price:</label>
			<input type="text" id="price" name="price"></input>
			<br /><br />

			<label for="image">Image filename:</label>
			<input type="text" id="image" name="image"></input>
			<br /><br />
			<br />

			<input type="submit" value="Add New Artwork" />
		</form>	
		<br><br>

		<h2>UPDATE SOLD ARTWORK</h2>
		<br>
		<form class="formdiv" id="mainForm" action="updatesold.php" method="POST">

		<label for="artID">ArtID:</label>
			<input type="text" id="artID" name="artID"></input>
			<br /><br />
			
			<label for="soldDT">Sold date:</label>
			<input type="text" id="soldDT" name="soldDT"></input>			
			<br /><br />
			<br />

			<input type="submit" value="Update Sold Date" />
		</form>	
	</div>
	<br><br>
	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>