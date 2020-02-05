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
		<title>Scripture Content</title>
	</head>
<body> 
	<h1>Scripture Text</h1>
		<?php
				$book 			= $scripture['book'];
				$chapter 		= $scripture['chapter'];
				$verse 			= $scripture['verse'];
				echo "<h3>$book $chapter:$verse</h3>";
		?>
		<ul>
		<?php
			foreach ($scriptures as $scripture)
				{
					$content = $scripture['content'];
					echo "<li><p>$content</p></li>";
				}
		?>
		</ul>
</body>
</html>