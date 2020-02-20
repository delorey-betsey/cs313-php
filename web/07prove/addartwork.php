<?php
session_start();
if (isset($_POST['artistID']) 
	&& isset($_POST['title'])
	&& isset($_POST['brief'])
	&& isset($_POST['price'])
	&& isset($_POST['thumb'])
	&& isset($_POST['fullsize']))
{
	$artistID   = $_POST['artistID'];
	$title 		= $_POST['title'];
	$brief  	= $_POST['brief'];
	$price      = $_POST['price'];
	$thumb      = $_POST['thumb'];
	$fullsize   = $_POST['fullsize'];

	require("dbConnect.php");
	$db = get_db();

	try {// Add the Artist
		$query = 'INSERT INTO userArfs(artist,title,brief,price,listingDT,thumb,fullsize) 
		VALUES(:typeID,:userName,:userPassword,:displayName,:pic,:bio)';
		$statement = $db->prepare($query);

		$statement->bindValue(':artist',$artistID);
		$statement->bindValue(':title',$title);
		$statement->bindValue(':brief',$brief);
		$statement->bindValue(':price',$price);
		$statement->bindValue(':listingDT',now());
		$statement->bindValue(':thumb',$thumb);
		$statement->bindValue(':fullsize',$fullsize);

		$statement->execute();

		// get the new id
		$newArtworkID = $db->lastInsertId("art_artid_seq");
		}
	catch (Exception $ex)
		{
			// Please be aware that you don't want to output the Exception message in
			// a production environment
			echo "Error with DB. Details: $ex";
			die();
		}
$_SESSION['newArtworkArtist']   = $artistID;
$_SESSION['newArtworkID']    	= $newArtworkID;
$_SESSION['newArtworkTitle'] 	= $title;
header("Location: adminpage.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
}
?>