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
//var_dump($categories);
//exit;

//Get the array of categories
    $navList = buildNav($categories);

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
          $action = filter_input(INPUT_GET, 'action');
    }
    
////Initialize the flag in the session named loggedin with a value of FALSE
//echo 'you hit initialize false';
//$_SESSION['loggedin']=FALSE;
//echo $_SESSION['loggedin'];
////exit;

//Check if the user data cookies exist, get values
if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}  

        
//if(isset($_COOKIE['lastname'])){
//    $cookieLastname = filter_input(INPUT_COOKIE, 'lastname', FILTER_SANITIZE_STRING);
//} 
//if(isset($_COOKIE['email'])){
//    $cookieEmail = filter_input(INPUT_COOKIE, 'email', FILTER_SANITIZE_STRING);
//} 
//if(isset($_COOKIE['level'])){
//    $cookieLevel = filter_input(INPUT_COOKIE, 'level', FILTER_SANITIZE_STRING);
//} 
    
    switch ($action){
        case 'something':
            break;
        default:
            include 'view/home.php';
    }






