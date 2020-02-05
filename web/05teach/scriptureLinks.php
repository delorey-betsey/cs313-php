<?php
$scripture_id = htmlspecialchars($_GET['scripture_id']);
echo $scripture_id;
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT book, chapter, verse, content FROM scriptureBD WHERE id = :id');
$stmt->bindValue(':id', $scripture_id, PDO::PARAM_INT);
$stmt->execute();
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);
VAR_DUMP($scriptures);
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
			
			echo $book;
			echo $chapter;
			echo $verse;
			echo $content;
			echo "<h1>Scripture Content for:</h1>";
			echo "<h1><strong>$book $chapter:$verse</strong>?></h1>";
			echo "<p><?php echo $content?></p>";
		}
	?>
</body>
</html>