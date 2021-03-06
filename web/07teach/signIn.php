<?php
/**********************************************************
* File: signIn.php
* Author: Br. Burton
* 
* Description: This page has a form for the user to sign in.
*
* In this case, to show another approach, we will have this
* page have two purposes, it will have the form for signing
* in, but it will also have the logic to check a username
* and password and redirect the user to the home page if
* everything checks out. Thus it will post to itself.
***********************************************************/

// If you have an earlier version of PHP (earlier than 5.5)
// You need to download and include password.php.
//require("password.php"); // used for password hashing.

session_start();

// echo "signin.php variables";
// echo "<br>";
// echo "session txtUser is:";
// echo "<br>";
// echo $_POST['txtUser'];
// echo "<br>";
// echo "session txtPassword is:";
// echo "<br>";
// echo $_POST['txtPassword'];
// echo "<br>";

$badLogin = false;
echo "<br>";
// echo "1 $ badLogin is:";
// echo "<br>";
// echo $badLogin;
// echo "<br>";

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

// echo "<br>";
// echo "$ username is:";
// echo "<br>";
// echo $username;
// echo "<br>";
// echo "$ password is:";
// echo "<br>";
// echo $password;
// echo "<br>";

	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM login7t WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

// echo "$ result is:";
// echo "<br>";
// var_dump $result;
// echo "<br>";

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

// echo "$ password is:";
// echo "<br>";
// echo $password;
// echo "<br>";
// echo "$ hashedPasswordFromDB is:";
// echo "<br>";
// echo $hashedPasswordFromDB;
// echo "<br>";

		// // now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB)) {
		// if ($password = $hashedPasswordFromDB) {
// echo "<br>";
// echo "2 $ badLogin is:";
// echo "<br>";
// echo $badLogin;
// echo "<br>";
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: home.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
// echo "<br>";
// echo "3 $ badLogin is:";
// echo "<br>";
// echo $badLogin;
// echo "<br>";
		}

	}
	else
	{
		$badLogin = true;
// echo "<br>";
// echo "4 $ badLogin is:";
// echo "<br>";
// echo $badLogin;
// echo "<br>";
	}
}

// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($badLogin)
// echo "<br>";
// echo "5 $ badLogin is:";
// echo "<br>";
// echo $badLogin;
// echo "<br>";
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<h1>Please sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST">

	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<label for="txtUser">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

Or <a href="signUp.php">Sign up</a> for a new account.

</div>

</body>
</html>