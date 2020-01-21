<?php
$username = $_POST['username'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$major = $_POST['major'];
$continents = $_POST['continents'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Betsey Delorey - 03 Teach RESULTS</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>

	<body>
        <!-- format return results -->
        <h1>Welcome user:       <?php echo $username;   ?> </h1>
        <h1>Email:              <?php echo $email;      ?> </h1>
        <A HREF="mailto:<?php echo $email; ?>">Click Here To Email Me</A>
        <h1>Comments:           <?php echo $comments;   ?> </h1>
        <h1>Major:              <?php echo $major;      ?> </h1>
        <h1>Continents visited: <?php echo $continents; ?> </h1> -->

        <?php
                if(empty($continents)) 
                {
                echo("You didn't select any continents.");
                } 
                else 
                {
                $N = count($continents);

                echo("You selected $N continents(s): ");
                for($i=0; $i < $N; $i++)
                {
                echo($continents[$i] . " ");
                }
                }
        ?>
	</body>
</html>