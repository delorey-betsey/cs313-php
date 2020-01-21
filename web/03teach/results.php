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
        <h2>Welcome user:       <?php echo "<p> $username;</p>"   ?> </h2>
        <h3>Email:              <?php echo $email;      ?> <A HREF="mailto:<?php echo $email;?>">Click Here To Email Me</A></h3>
        
        <h3>Comments:           <?php echo $comments;   ?> </h3>
        <h3>Major:              <?php echo $major;      ?> </h3>
        <h3>Continents visited: </h3> 

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