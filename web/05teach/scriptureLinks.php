<?php
$scripture_id = htmlspecialchars($_GET['scripture_id']);

require "dbConnect.php";
$db = get_db();

//SELECT book, chapter, verse, content FROM scriptureBD by id;
 
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
			// Go through each result
			foreach ($scriptures as $scripture)
			{
				$book 			= $scripture['book'];
				$chapter 		= $scripture['chapter'];
				$verse 			= $scripture['verse'];
				$content 		= $scripture['content'];
			}
			?>
	<h1>Scripture Content for:<?php echo <strong>$book $chapter:$verse</strong>?></h1>
	<p><?php echo $content?></p>
</body>
</html>