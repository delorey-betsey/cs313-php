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
	<?php echo "You are signed in as: $username"; ?>
	<br /><br />
	<h1>Welcome to ARfS Admin</h1>
	<br><br>
	<h2>ADD NEW ARTIST</h2>
		<br>
		<!-- <form class="formdiv" id="mainForm" action="" method="POST"> -->
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

			<input type="submit" value="Add to Database" />
		</form>

</div>
	<br><br>
	<a href="signOut.php">Sign Out</a>
</div>

</body>
</html>