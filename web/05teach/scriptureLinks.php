<?php
if (!isset($_GET['scripture_id']))
{ die("Error, id not specified...");
}
$scripture_id = htmlspecialchars($_GET['scripture_id']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Links</title>
	</head>

<body>

 <h1>Scripture Content for Scripture ID <?php echo $scripture_id ?></h1>
<p>hello betsey</p>


</body>
</html>