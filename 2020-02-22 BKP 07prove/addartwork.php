<?php
session_start();
if (isset($_POST['artistID']) 
	&& isset($_POST['title'])
	&& isset($_POST['brief'])
	&& isset($_POST['price'])
	&& isset($_POST['image']))
{
	$artistID   = $_POST['artistID'];
	$title 		= $_POST['title'];
	$brief  	= $_POST['brief'];
	$price      = $_POST['price'];
	$image      = $_POST['image'];

	$thumblocation = "images/thumb/";	
	$thumbfilename = $thumblocation . $image;

	$fulllocation  = "images/full/";
	$fullfilename  = $fulllocation . $image;

	$today = date("Y-m-d");

	require("dbConnect.php");
	$db = get_db();

	try {// Add the Artist
		$query = 'INSERT INTO art(artist,title,brief,price,listingDT,thumb,fullsize) 
		VALUES(:artist,:title,:brief,:price,:listingDT,:thumb,:fullsize)';
		$statement = $db->prepare($query);

		$statement->bindValue(':artist',$artistID);
		$statement->bindValue(':title',$title);
		$statement->bindValue(':brief',$brief);
		$statement->bindValue(':price',$price);
		$statement->bindValue(':listingDT',$today);
		$statement->bindValue(':thumb',$thumbfilename);
		$statement->bindValue(':fullsize',$fullfilename);

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