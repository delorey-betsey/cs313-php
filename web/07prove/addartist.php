<?php
$newuserName     = $_POST['newuserName'];
$newuserPassword = $_POST['newuserPassword'];
$newdisplayName  = $_POST['newdisplayName'];
$newpic          = $_POST['newpic'];
$newbio          = $_POST['newbio'];

require("dbConnect.php");
$db = get_db();

try {// Add the Artist
	$query = 'INSERT INTO userArfs(typeID,userName,userPassword,displayName,pic,bio) 
	VALUES(:typeID,:userName,:userPassword,:displayName,:pic,:bio)';
	$statement = $db->prepare($query);

	$statement->bindValue(':typeID',2);
	$statement->bindValue(':userName',$newuserName);
	$statement->bindValue(':userPassword',$newuserPassword);
	$statement->bindValue(':displayName',$newdisplayName);
	$statement->bindValue(':pic',$newpic);
	$statement->bindValue(':bio',$newbio);

	$statement->execute();

	// get the new id
	$newArtistID = $db->lastInsertId("userArfs_userid_seq");
	echo "new artist id:";
	echo $newArtistID;
	}
catch (Exception $ex)
	{
		// Please be aware that you don't want to output the Exception message in
		// a production environment
		echo "Error with DB. Details: $ex";
		die();
	}

header("Location: adminpage.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>