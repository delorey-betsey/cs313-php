<?php
/* 
 * Acme Controller
 */

//Get or create session
session_start();

//Get the database connection file
    require_once 'library/connections.php';
//Get the database functions file
    require_once 'library/functions.php';
//Get the acme model for use as needed
    require_once 'model/acme-model.php';

//Get the array of categories
    $categories = getCategories();

//Get the array of categories
    $navList = buildNav($categories);

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
          $action = filter_input(INPUT_GET, 'action');
    }
    
if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}  
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }   
if(isset($_COOKIE['firstname'])){
$cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);

$_SESSION['regWelcomeMessage'] = "<p>Hello $cookieFirstname!</p>";
if(isset($clientFirstname)){
setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');}
}
switch ($action){
    case 'something':
        break;
    default:
        include 'view/home.php';
}






