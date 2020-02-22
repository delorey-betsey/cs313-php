<?php
require("password.php"); 
session_start();
unset($_SESSION['username']);
unset($_SESSION['newArtistID']);
unset($_SESSION['newArtistName']);
header("Location: homepage.php");
die(); 