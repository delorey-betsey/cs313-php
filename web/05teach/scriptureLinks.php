<?php
if (!isset($_GET['scripture_id']))
{ die("Error, id not specified...");
}
$scripture_id = htmlspecialchars($_GET['scripture_id']);
require "dbConnect.php";
$db = get_db();
//SELECT id, book, chapter, verse, content FROM scriptureBD;
$query = 'SELECT  book, chapter, verse, content FROM scriptureBD WHERE id = $scripture_id';
$stmt = $db->prepare($query);
$stmt->execute();
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Link to Content</title>
	</head>

<body>

	<h1>Scripture Content for:<?php echo <strong>$book $chapter:$verse</strong>?></h1>
	<p><?php echo $content?></p>

</body>
</html>