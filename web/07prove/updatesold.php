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
}	


?>