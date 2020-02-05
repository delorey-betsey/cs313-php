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
				$book 		= $scripture['book'];
				$chapter 	= $scripture['chapter'];
				$verse 		= $scripture['verse'];
				$content 	= $scripture['content'];
				echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
			}
			?>
		</ul>
	</div>
</body>
</html>