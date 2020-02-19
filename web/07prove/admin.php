<?php
session_start();

// echo "session username is:";
// echo "<br>";
// echo $_SESSION['username'];
// echo "<br>";

if (isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
	}
	else
	{
		header("Location: signIn.php");
		die(); // we always include a die after redirects.
	}
?>

			<!-- if (isset($_SESSION['newArtistID'])){
			$newArtistID = $_SESSION['newArtistID'];
			<?php echo "New artist has been added: ID = <?= $newArtistID <br /><br />";?> -->

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
	<?php echo "You are signed in as: $username"; ?>
	<br /><br />
	<h1>Welcome to ARfS Admin</h1>
	<br><br>
	<h2>ADD NEW ARTIST</h2>

		<!-- <form id="mainForm" action="addartist.php" method="POST"> -->
		<form class="formdiv" id="mainForm" action="" method="POST">

			<label for="userName">User name:</label>
			<input type="text" id="userName" name="userName"></input>			
			<br /><br />

			<label for="userPassword">User password:</label>
			<input type="text" id="userPassword" name="userPassword"></input>
			<br /><br />

			<label for="displayName">User display name:</label>
			<input type="text" id="displayName" name="displayName"></input>
			<br /><br />

			<label for="pic">Picture file name:</label>
			<input type="text" id="pic" name="pic"></input>
			<br /><br />

			<label for="txtVerse">Short user bio:</label>
			<input type="text" id="txtVerse" name="txtVerse"></input>
			<br /><br />
			<br />

			<input type="submit" value="Add to Database" />

		</form>

</div>
	<br><br>
	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>