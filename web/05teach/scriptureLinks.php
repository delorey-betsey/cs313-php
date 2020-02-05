<?php
$scripture_id = htmlspecialchars($_GET['scripture_id']);
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT book, chapter, verse, content FROM scriptureBD WHERE id = :id');
$stmt->bindValue(':id', $scripture_id, PDO::PARAM_INT);
$stmt->execute();
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Link to Content</title>
	</head>
<body> 
	<?php
	foreach ($scriptures as $scripture)
		{
			$book 			= $scripture['book'];
			$chapter 		= $scripture['chapter'];
			$verse 			= $scripture['verse'];
			$content 		= $scripture['content'];
			echo "<h1>Scripture Content for:</h1>";
			echo "<h3>$book $chapter:$verse</h3>";
			echo "<p>$content</p>";
		}
	?>
</body>
</html>