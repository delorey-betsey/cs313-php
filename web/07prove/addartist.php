<?php

// get the data from the POST
$typeID       = $_POST['typeID'];
$userName     = $_POST['userName'];
$userPassword = $_POST['userPassword'];
$displayName  = $_POST['displayName'];
$pic          = $_POST['pic'];
$bio          = $_POST['bio'];

// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided

require("dbConnect.php");
$db = get_db();

try {// Add the Artist
	$query = 'INSERT INTO userArfs(typeID,userName,userPassword,displayName,pic,bio) 
	VALUES(:typeID,:userName,:userPassword,:displayName,:pic,:bio)';
	$statement = $db->prepare($query);

	$statement->bindValue(':typeID',2);
	$statement->bindValue(':userName',$userName);
	$statement->bindValue(':userPassword',$userPassword);
	$statement->bindValue(':displayName',$displayName);
	$statement->bindValue(':pic',$pic);
	$statement->bindValue(':bio',$bio);

	$statement->execute();

	// get the new id
	$newArtistID = $db->lastInsertId("userArfs_id_seq");
	}
catch (Exception $ex)
	{
		// Please be aware that you don't want to output the Exception message in
		// a production environment
		echo "Error with DB. Details: $ex";
		die();
	}

$_SESSION['newArtistID'] = $newArtistID;
header("Location: admin.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>