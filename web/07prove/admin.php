<?php
<?php echo "entering admin.php from adminpage.php"; ?>
session_start();

// echo "session username is:";
// echo "<br>";
// echo $_SESSION['username'];
// echo "<br>";

if (isset($_SESSION['username']))
	{
		$username    = $_SESSION['username'];
		echo "Your username is: <?= $username ?><br /><br />";
	}
	else
	{
		header("Location: signIn.php");
		die(); // we always include a die after redirects.
	}
if (isset($_SESSION['newArtistID']))
	{
		$newArtistID = $_SESSION['newArtistID'];
		echo "New artist has been added: ID = <?= $newArtistID ?><br /><br />";
	?>

<?php
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

	<h1>Welcome to ARfS Admin</h1>

	<h2>ADD NEW ARTIST</h2>

		<form id="mainForm" action="addartist.php" method="POST">

			<input type="text" id="userName" name="userName"></input>
			<label for="userName">User name:</label>
			<br /><br />

			<input type="text" id="userPassword" name="userPassword"></input>
			<label for="userPassword">User password:</label>
			<br /><br />

			<input type="text" id="displayName" name="displayName"></input>
			<label for="displayName">User display name:</label>
			<br /><br />

			<input type="text" id="pic" name="pic"></input>
			<label for="pic">Picture file name:</label>
			<br /><br />

			<input type="text" id="txtVerse" name="txtVerse"></input>
			<label for="txtVerse">Short user bio:</label>
			<br /><br />
			<br />

			<input type="submit" value="Add to Database" />

		</form>

</div>

	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>