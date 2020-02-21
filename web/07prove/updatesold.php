<?php
session_start();
//check artid submitted

if (isset($_POST['artID']))
{   
	echo "checking IF for artid";
	$artID   = $_POST['artID'];
	echo $artID;
} else
	{
		header("Location: adminpage.php");
		die(); 
	}

// to populate sold date to mark as sold

if (isset($_POST['artID']) 
	&& isset($_POST['soldDT']))
{   
	echo "IF for updating sold date";
	$artID   = $_POST['artID'];
	$soldDT  = $_POST['soldDT'];

	require("dbConnect.php");
	$db = get_db();

	try { //update sold date
		$query = 'UPDATE art SET soldDT = :soldDT WHERE artID = :artID';
		$statement = $db->prepare($query);
		$statement->bindValue(':soldDT',$soldDT);
		$statement->bindValue(':artID',$artID);
		$statement->execute();		
		}
	catch (Exception $ex)
		{
			echo "Error with DB. Details: $ex";
			die();
		}	
	$_SESSION['updatemsg']  = '**Sold date updated successfully.';
	header("Location: adminpage.php");
	die();
}
?>