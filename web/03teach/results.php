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
        <h2>Welcome user:      <?php echo $username;   ?> </h2>
        <p>Email:              <?php echo $email;      ?> <A HREF="mailto:<?php echo $email;?>">Mailto:</A></p>        
        <p>Comments:           <?php echo $comments;   ?> </p>
        <p>Major:              <?php echo $major;      ?> </p>
     
        Continents visited: 

        <?php
                if(empty($continents)) 
                {
                echo("You didn't select any continents.");
                } 
                else 
                {
                $N = count($continents);

                echo("You selected $N continents(s): ");
                echo "<br />";
                for($i=0; $i < $N; $i++)
                {
                echo "<br />";
                echo($continents[$i] . " ");
                }
                }
        ?>
	</body>
</html>