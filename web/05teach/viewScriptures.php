<?php
require "dbConnectBD.php";
$db = get_db();
//SELECT book, chapter, verse, content FROM scriptureBD;
$query = 'SELECT book, chapter, verse, content FROM scriptureBD';
$stmt = $db->prepare($query);
$stmt->execute();
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Scripture List</title>
	</head>

<body>
	<div>
		<h1>Scripture Resources</h1>
		<ul>
			<?php
			// Go through each result
			foreach ($scriptures as $scripture)
			{
				$id 		= $scripture['id'];
				$book 		= $scripture['book'];
				$chapter 	= $scripture['chapter'];
				$verse 		= $scripture['verse'];
				$content 	= $scripture['content'];
				echo "<li><a href='scriptureLinks.php?id=$id'><strong>$book $chapter:$verse</strong></a> "<li>";
			}
			?>
		</ul>
	</div>
</body>
</html>