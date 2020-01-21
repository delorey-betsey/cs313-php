<?php
/* 
 * Accounts Controller
 *  * Switch case: login>>view/login.php
 *  * Switch case: registration>>view/registration.php
 *  * Switch case:  register>>$clientFirstname $clientLastname $clientEmail
 *  *               $clientPassword data to model as $regOutcome
 */
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
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
//===========================================================================
    switch ($action){
        //Show login view
        case 'login':
            include '../view/login.php';
            break;
        //Show registration view
        case 'registration':
            include '../view/registration.php';
            break;
        case 'loginData':
        //    echo 'You are in loginData'; exit;
        //Filter and store the data
            $clientEmail        = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword     = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);  
        //Recreate the $clientEmail variable and assign to it what is returned 
        //from calling the checkEmail($clientEmail) function.
            $clientEmail = checkEmail($clientEmail);
        //Recreate the $clientPassword variable and assign to it what is returned 
        //from calling the checkPassword($clientPassword) function.
            $checkPassword = checkPassword($clientPassword);
        //Check for missing data
        if (empty($clientEmail) || empty($checkPassword)) {
         $message = '<p>Please provide information for all empty form fields.'
                    . '</p>';
            include '../view/login.php';
            exit;
        }
        break;
        //Complete new account registration
        case 'register':
        //    echo 'You are in register'; exit;
        //Filter and store the data
            $clientFirstname    = filter_input(INPUT_POST,'clientFirstname', FILTER_SANITIZE_STRING);
            $clientLastname     = filter_input(INPUT_POST,'clientLastname', FILTER_SANITIZE_STRING);
            $clientEmail        = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword     = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);  
        //Recreate the $clientEmail variable and assign to it what is returned 
        //from calling the checkEmail($clientEmail) function.
            $clientEmail = checkEmail($clientEmail);
        //Recreate the $clientPassword variable and assign to it what is returned 
        //from calling the checkPassword($clientPassword) function.
            $checkPassword = checkPassword($clientPassword);
        //Check for missing data
        if (empty($clientFirstname) || empty($clientLastname) || 
                empty($clientEmail) || empty($checkPassword)) {
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
        }







