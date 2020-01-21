<?php
$username = $_POST['username'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$major = $_POST['major'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Betsey Delorey - 03 Teach RESULTS</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>

	<body>
        <!-- format return results -->
        <h1>Welcome user:   <?php echo $username; ?> </h1>
        <h1>Email:          <?php echo $email; ?> </h1>
        <h1>Comments:       <?php echo $comments; ?> </h1>
	</body>
</html>