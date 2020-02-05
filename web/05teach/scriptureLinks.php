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
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Link to Content</title>
	</head>
<body>

	<?php
		$book 			= $scripture['book'];
		$chapter 		= $scripture['chapter'];
		$verse 			= $scripture['verse'];
		$content 		= $scripture['content'];
		
		echo $book;
		echo $chapter;
		echo $verse;
		echo $content;
	?>


</body>
</html>