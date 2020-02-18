<?php
/**********************************************************
* File: home.php
* Author: Br. Burton
* 
* Description: This is the home page. It checks that a user
*  exists on the session and redirects to the login page
*  if it does not.
***********************************************************/
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
	header("Location: modules/signIn.php");
	die(); // we always include a die after redirects.
}

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

	Your username is: <?= $username ?><br /><br />

	<a href="modules/signOut.php">Sign Out</a>
</div>

</body>
</html>