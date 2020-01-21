<?php
/* 
 * Accounts Controller
 *  * Switch case: login>>view/login.php
 *  * Switch case: registration>>view/registration.php
 *  * Switch case: loginData>>$clientEmail $clientPassword-if empty to login view else to admin view
 *  * Switch case:  register>>$clientFirstname $clientLastname $clientEmail
 *  *               $clientPassword data to model as $regOutcome
 */

//Get or create session
session_start();

//Get the database connection file
    require_once '../library/connections.php';
    //Get the functions file
    require_once '../library/functions.php';
//Get the acme model for use as needed
    require_once '../model/acme-model.php';
//Get the accounts model
    require_once '../model/accounts-model.php';
    
   
    
//Get the array of categories
    $categories = getCategories();
//var_dump($categories);
//exit;
//===========================================================================
//Get the array of categories
    $navList = buildNav($categories);
//===========================================================================
//Check if the user data cookies exist, get values
if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}  
if(isset($_COOKIE['lastname'])){
    $cookieLastname = filter_input(INPUT_COOKIE, 'lastname', FILTER_SANITIZE_STRING);
} 
if(isset($_COOKIE['email'])){
    $cookieEmail = filter_input(INPUT_COOKIE, 'email', FILTER_SANITIZE_STRING);
} 
if(isset($_COOKIE['level'])){
    $cookieLevel = filter_input(INPUT_COOKIE, 'level', FILTER_SANITIZE_STRING);
} 
    
//===========================================================================
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
//===========================================================================
    switch ($action){
        //Show login view
        case 'login':
//echo 'you hit case login';
            include '../view/login.php';
            break;
        //Show registration view
        case 'registration':
            include '../view/registration.php';
            break;
//===========================================================================
//===========================================================================
//Complete login process
    case 'loginData':
//echo 'you hit begin account controller loginData';
//echo $_SESSION['loggedin'];
//exit;
//  echo 'You are in loginData'; exit;
        //Filter and store the data
        $clientEmail        = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
        $clientPassword     = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);  

        //Query the client data based on the email address
        $clientData = getClient($clientEmail);
        
        //Check for missing data--(empty equals 0 or failed)
        if (empty($clientData)) {
            $message = '<p>Please check your email and try again.'
                        . '</p>';
            include '../view/login.php';
            exit;
            } 
            
        //Compare the password just submitted aainst the hashed password for the matching client
        $hashCheck = password_verify($clientPassword,$clientData['clientPassword']);

        //If the hashes don't match create an error and return to the login view
        //hashCheck returns TRUE if matched and FALSE if passwords do not match
        if(!$hashCheck){
            $message = '<p>Please check your password and try again.</p>';
            include '../view/login.php';
            exit;
        }        
 //       setcookie('firstname', '', strtotime('-1 year'), '/');
        
     
        //create global session variables
 //       setcookie('firstname', '', strtotime('-1 year'), '/');
//        setcookie('lastname'    , $clientLastname, strtotime('+1 year'), '/');
//        setcookie('email'       , $clientEmailLog, strtotime('+1 year'), '/');
//        setcookie('level'       , $clientLevel, strtotime('+1 year'), '/');
        
        //A valid user exists, log them in
        //Creating a flag in the session named loggedin with a value of TRUE
        $_SESSION['loggedin']=TRUE;
//echo 'you hit end account controller loginData';
//echo $_SESSION['loggedin'];

        //Remove the password from the array--the pop function removes the last element from the array
        array_pop($clientData);

        //Store the array into the session
        $_SESSION['clientData']= $clientData;
//        $_SESSION['firstname'] = $_SESSION['clientData']['clientFirstname'];
        $clientFirstname = $_SESSION['clientData']['clientFirstname'];
        setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
 //       $_SESSION['welcome'] = $_SESSION['clientData']['clientFirstname'];
        
        //Send them to the admin view
        include'../view/admin.php';
        exit;
//===========================================================================
//===========================================================================
        //Complete new account registration
        case 'register':
//echo 'You are in register'; exit;

        //Filter and store the data
            $clientFirstname    = filter_input(INPUT_POST,'clientFirstname', FILTER_SANITIZE_STRING);
            $clientLastname     = filter_input(INPUT_POST,'clientLastname', FILTER_SANITIZE_STRING);
            $clientEmail        = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword     = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);  
            //Check for existing email address in the client table
            //SELECT (in accounts-model.php)returns email or nothing, translated to 1 or 0 in function return.          
            $existingEmail = checkExistingEmail($clientEmail);

            if($existingEmail){
                $message = '<p>That email address already exists. Do you want to login instead?</p>';
                include '../view/login.php';
                exit;
            }
			
            //Recreate the $clientEmail variable and assign to it what is returned 
            //from calling the checkEmail($clientEmail) function.
            //filter_var (in functions.php) returns true or false.
            $rtrnEmail = checkEmail($clientEmail);

            //Recreate the $clientPassword variable and assign to it what is returned 
            //from calling the checkPassword($clientPassword) function.
            //preg_match (in functions.php) returns 1 or 0.
            $rtrnPassword = checkPassword($clientPassword); 
     
            //Continue regular registration checks if email is not already in clients table
            //Check for missing data--(empty equals 0 or failed)
            if (empty($clientFirstname) || empty($clientLastname) || 
                            empty($rtrnEmail) || empty($rtrnPassword)) {
             $message = '<p>Please provide information for all empty form fields.'
                                    . '</p>';
                    include '../view/registration.php';
                    exit;
            }
//===========================================================================        
        //Hash the checked password.
            $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);  
			
        //Send the data to the model        
            $regOutcome = regClient($clientFirstname, $clientLastname, 
                                    $clientEmail, $hashedPassword); 

        //Check and report the result
        if ($regOutcome === 1) {
            setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');

            $message = "<p>Thanks for registering $clientFirstname. "
                    . "Please use your email and password to login.</p>";
            include '../view/login.php';
            exit;
        } else {
            $message = "<p>Sorry $clientFirstname, but the registration failed"
                     . ".  Please try again.</p>";
            include '../view/registration.php';
            exit;
        }
        break;
        case 'logout':
            $_SESSION['loggedin']=FALSE;
//            unset($clientFirstname);
//            unset($clientLastname);
//            unset($clientEmail);
//            unset($clientEmailLog);
//            unset($clientPassword);
//            unset($clientLevel);
            session_destroy();
            header ('location: /acme/index.php');
            exit;
            break;
        default:
            include '../view/admin.php';
        }