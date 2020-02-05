<?php
if (!isset($_GET['scripture_id']))
{ die("Error, id not specified...");
}
$scripture_id = htmlspecialchars($_GET['scripture_id']);
require "dbConnect.php";
$db = get_db();
//SELECT book, chapter, verse, content FROM scriptureBD;
$query = 'SELECT book, chapter, verse, content FROM scriptureBD WHERE id = $scripture_id';
$stmt = $db->prepare($query);
$stmt->execute();
$scripture = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Link to Content</title>
	</head>
<body>
	<?php
	$scripture_id 	= $scripture['id'];
	$book 			= $scripture['book'];
	$chapter 		= $scripture['chapter'];
	$verse 			= $scripture['verse'];
	$content 		= $scripture['content'];
	?>
	<h1>Scripture Content for:<?php echo <strong>$book $chapter:$verse</strong>?></h1>
	<p><?php echo $content?></p>
</body>
</html>