<?php
session_start();
if (isset($_POST['artID']) 
	&& isset($_POST['soldDT']))
	{
		$artID   = $_POST['artID'];
		$soldDT  = $_POST['soldDT'];
		try { //update sold date
			$query = 'UPDATE art SET soldDT = :soldDT WHERE artID = :artID';
			$statement = $db->prepare($query);
			$statement->bindValue(':soldDT',$soldDT);
			$statement->bindValue(':artID',$artID);
			$statement->execute();
			
			require("dbConnect.php");
			$db = get_db();
			}
		catch (Exception $ex)
			{
				// Please be aware that you don't want to output the Exception message in
				// a production environment
				echo "Error with DB. Details: $ex";
				die();
			}
	} 
$_SESSION['updatemsg']  = '**Sold date update was successful.';
header("Location: adminpage.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>