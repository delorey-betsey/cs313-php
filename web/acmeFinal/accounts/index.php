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
//Get the reviews model
    require_once '../model/reviews-model.php';
    
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
case 'login':
    $clientEmail = '';
    $clientPassword = '';

    if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    
    $_SESSION['regWelcomeMessage'] = "<p>Hello $cookieFirstname!</p>";
    if(isset($clientFirstname)){
    setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');}
    }
    
    include '../view/login.php';
    break;
    
case 'registration':
    include '../view/registration.php';
    break;

case 'admin':
    $reviews = getReviewsByClient(($_SESSION['rclientId']));

if(count($reviews)>0){
    $reviewList = '<table>';    
    $reviewList .= '<tr>'
        . '<th>PRODUCT</th>'
        . '<th>REVIEW DATE</th>'
        . '<th>EDIT</th>'
        . '<th>DELETE</th>'
        . '</tr>';
        $reviewList .= '<tbody>';
    foreach ($reviews as $review) {
        $date = date("F j, Y", strtotime($review['reviewDate']));
        $reviewList .= "<tr>";
        $reviewList .= "<td>$review[invName]</td>";
        $reviewList .= "<td>$date</td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rEdit&id=$review[reviewId]' title='Click to delete'>Edit</a></td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rDelete&id=$review[reviewId]' title='Click to delete'>Delete</a></td>";
        $reviewList .= "</tr>";}
        $reviewList .= '</tbody></table>';
        $_SESSION['reviewList'] = $reviewList;
    } 
    else {
    $message = '<p>No reviews found for this userid.</p>';
    } 
    if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    
    $_SESSION['regWelcomeMessage'] = "<p>Hello $cookieFirstname!</p>";
    if(isset($clientFirstname)){
    setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');}}

    include '../view/admin.php';
    break;
//===========================================================================
//===========================================================================
//Complete login process
case 'loginData':
    unset($_SESSION['welcomeMessage']);
    unset($_SESSION['clientFirst']);
    unset($_SESSION['clientLast']);
    //Filter and store the data
    $clientEmail    = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
    $clientPassword = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);
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

    //A valid user exists, log them in
    //Creating a flag in the session named loggedin with a value of TRUE
    $_SESSION['loggedin']=TRUE;
    //Remove the password from the array--
    //the pop function removes the last element 
    array_pop($clientData);
    //Store the array into the session
    $_SESSION['clientData']= $clientData;
    $clientFirstname = $_SESSION['clientData']['clientFirstname'];    
    $clientLastname = $_SESSION['clientData']['clientLastname'];
    $clientLevel = $_SESSION['clientData']['clientLevel'];
    $rclientId = $_SESSION['clientData']['clientId'];
//    setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
//    $welcomeMessage = $clientFirstname;
//welcomemsg
    $_SESSION['welcomeMessage'] = "<p>Welcome $clientFirstname</p>";
//screenname
    $_SESSION['clientFirst'] = "$clientFirstname";
    $_SESSION['clientLast'] = "$clientLastname";
    $_SESSION['clientLevel'] = "$clientLevel";
    $_SESSION['rclientId'] = "$rclientId";

$reviews = getReviewsByClient($rclientId);
//echo 'logindata getReviewsByClient reviews = ';
//var_dump ($reviews);
//exit;
if(count($reviews)>0){
$reviewList = '<table>';

$reviewList .= '<tr>'
        . '<th>PRODUCT</th>'
        . '<th>REVIEW DATE</th>'
        . '<th>EDIT</th>'
        . '<th>DELETE</th>'
        . '</tr>';
$reviewList .= '<tbody>';
foreach ($reviews as $review) {
    $date = date("F j, Y", strtotime($review['reviewDate']));
    $reviewList .= "<tr>";
    $reviewList .= "<td>$review[invName]</td>";
    $reviewList .= "<td>$date</td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rEdit&id=$review[reviewId]' title='Click to delete'>Edit</a></td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rDelete&id=$review[reviewId]' title='Click to delete'>Delete</a></td>";
    $reviewList .= "</tr>";
}
$reviewList .= '</tbody></table>';
$_SESSION['reviewList'] = $reviewList;
//echo 'account index logindata case reviewList = ';
//echo $reviewList;
//exit;
}
else{
    $message = '<p>No reviews found for this userid.</p>';
} 

    if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    
    $_SESSION['regWelcomeMessage'] = "<p>Hello $cookieFirstname!</p>";
    if(isset($clientFirstname)){
    setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');}}
    //Send them to the admin view
    include'../view/admin.php';
    exit;
//===========================================================================
//Complete new account registration
case 'register':
//Filter and store the data
    $clientFirstname    = filter_input(INPUT_POST,'clientFirstname', FILTER_SANITIZE_STRING);
    $clientLastname     = filter_input(INPUT_POST,'clientLastname', FILTER_SANITIZE_STRING);
    $clientEmail        = filter_input(INPUT_POST,'clientEmail', FILTER_SANITIZE_EMAIL);
    $clientPassword     = filter_input(INPUT_POST,'clientPassword', FILTER_SANITIZE_STRING);  
    //Check for existing email address in the client table
    //returns email or nothing, translated to 1 or 0 in function return.          
    $existingEmail = checkExistingEmail($clientEmail);
    if($existingEmail){
        $message = '<p>That email address already exists. <br>Do you want to login instead?</p>';
        include '../view/login.php';
        exit;
    }

    //Check email format
    //filter_var (in functions.php) returns true or false.
    $rtrnEmail = checkEmail($clientEmail);
    //Check password format
    //preg_match (in functions.php) returns 1 or 0.
    $rtrnPassword = checkPassword($clientPassword);      
    //Check for missing data--(empty equals 0 or failed)
    if (empty($clientFirstname) || empty($clientLastname) || 
                    empty($rtrnEmail) || empty($rtrnPassword)) {
     $message = '<p>Please provide information for all empty form fields.'
                            . '</p>';
            include '../view/registration.php';
            exit;
    }
//===========================================================================
//if new email and email and password formatted correctly, 
//continue registration        
//Hash the checked password.
    $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
//Send the data to the model        
    $regOutcome = regClient($clientFirstname, $clientLastname, 
                            $clientEmail, $hashedPassword); 
//Check and report the result
//SETCOOKIE
if ($regOutcome === 1) {
    setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');

    $message = "<p>Thanks for registering, $clientFirstname. <br>"
            . "Please use your email and password to login.</p>";
    include '../view/login.php';
    exit;
} 
else {
    $message = "<p>Sorry $clientFirstname, but the registration failed"
             . ".  Please try again.</p>";
    include '../view/registration.php';
    exit;
}
break;
//===========================================================================
//===========================================================================
//display client update view with two forms to update info and password
case 'updtclient':
    unset ($_SESSION['message']);
    //get client info and deliver to forms
    $clientId = $_SESSION['clientData']['clientId'];
    $clientInfo = getClientInfo($clientId);
    if (empty($clientInfo)) {
        $message = 'Sorry, no user information was found.';
        include '../view/client-update.php'; 
        exit;
    }

    //Store the array into the session
    $_SESSION['clientInfo']= $clientInfo;
    $clientInfoId = $_SESSION['clientInfo']['clientId'];
    include'../view/client-update.php';
    exit;
break;
//===========================================================================
//===========================================================================
//Complete update of client first, last, email
case 'updtacct':
    unset ($_SESSION['message2']);
    //Filter and store the data
    $ciFirstname    = filter_input(INPUT_POST,'ciFirstname', FILTER_SANITIZE_STRING);
    $ciLastname     = filter_input(INPUT_POST,'ciLastname', FILTER_SANITIZE_STRING);
    $ciEmail        = filter_input(INPUT_POST,'ciEmail', FILTER_SANITIZE_EMAIL);         
    $ciId           = filter_input(INPUT_POST,'ciId', FILTER_SANITIZE_NUMBER_INT); 

//===========================================================================          
//===========================================================================
//===========================================================================
//===========================================================================        
    //Check email format
    //filter_var (in functions.php) returns true or false.
    $rtrnciEmail2 = checkEmail($ciEmail);
    //Check for existing email address in the client table
    //returns email or nothing, translated to 1 or 0 in function return.
    if (empty($rtrnciEmail2)) {
        $message2 = '<p>Please enter valid email.</p>';
        $_SESSION['message'] = $message2;
        include '../view/client-update.php';
        exit;
    }
    $existingciEmail2 = checkExistingEmail($ciEmail);
    //if user wanting to update email with an email that exists on db--error
    if ($ciEmail != $_SESSION['clientInfo']['clientEmail']){
        if($existingciEmail2){
        $message2 = '<p>That email address already exists. Please login.</p>';
        $_SESSION['message'] = $message2;
        include '../view/client-update.php';
        exit;}
        }
//echo '$ciLastname = ';
//echo $ciLastname;
//exit;
    //Check if empty missing data    
    if (empty($ciFirstname) || empty($ciLastname) || 
        empty($ciEmail)) {
        $message2 = '<p>Please provide information for all empty form fields.'
                . '</p>';
        $_SESSION['message'] = $message2;
        include '../view/client-update.php';
        exit;} 

    //if new email and email formatted correctly
    //Send the data to the model     
    $updtAccount2 = updtAccount($ciFirstname, $ciLastname,$ciEmail,$ciId); 

////===========================================================================
//===========================================================================
    //Check and report the result
    if ($updtAccount2 === 1) {         
    //if update success set session message and return updated info to admin
        $clientInfo2 = getClientInfo($ciId);
        //Store the array into the session
        array_pop($clientInfo2); 
        $_SESSION['clientInfo2']= $clientInfo2;          
        $clientFirstname2 = $_SESSION['clientInfo2']['clientFirstname'];
        $message2 = "<p>$clientFirstname2, your account update was successful.</p>";
        $_SESSION['message'] = $message2;
        //flow through accounts controller to default to admin page
        header('location: /acme/accounts/index.php');
    } elseif (empty($updtAccount2)) {
        $message2 = "<p>Sorry, your account update failed."
                . " Please try again.</p>";
        $_SESSION['message'] = $message2;
        include '../view/admin.php'; 
        exit;
        } 
    exit;
    break;
//===========================================================================          
//===========================================================================
//Complete update of client password
unset ($_SESSION['message3']);
case 'updtpword':
    //Filter and store the data       
    $ciId         = filter_input(INPUT_POST,'ciId', FILTER_SANITIZE_NUMBER_INT); 
    $ciPassword   = filter_input(INPUT_POST,'ciPassword', FILTER_SANITIZE_STRING);

    //Check password format
    //preg_match (in functions.php) returns 1 or 0.
    $rtrnciPassword = checkPassword($ciPassword);      
    //Check for missing data--(empty equals 0 or failed)
    if (empty($rtrnciPassword)) {
        $message3 = '<p>Please provide information for all empty form fields.'
                . '</p>';
        $_SESSION['message'] = $message3;
        include '../view/client-update.php';
        exit;}      

//if password formatted correctly, 
//Continue password change        
//Hash the checked password.
    $hashedciPassword = password_hash($ciPassword, PASSWORD_DEFAULT);
         
//Send the data to the model        
    $updtPassword3 = updtPassword($hashedciPassword,$ciId); 

//Check and report the result
if ($updtPassword3 === 1) {

//if update success set session message and return updated info to admin
        $clientInfo3 = getClientInfo($ciId);
        //Store the array into the session
        array_pop($clientInfo3); 
        $_SESSION['clientInfo3']= $clientInfo3;          
        $clientFirstname3 = $_SESSION['clientInfo3']['clientFirstname'];
        $message3 = "<p>$clientFirstname3, your password update was successful.</p>";
        $_SESSION['message'] = $message3;

        //flow through accounts controller to default to admin page
        header('location: /acme/accounts/index.php');
        exit;
    } elseif (empty($updtPassword3)) {
        $message3 = "<p>Sorry, your password update failed."
                . " Please try again.</p>";
        $_SESSION['message'] = $message3;
        include '../view/admin.php'; 
        exit;
        } 
    exit;
    break;       
//===========================================================================
  
case 'logout':
    $_SESSION['loggedin']=FALSE;
    unset ($_SESSION['regWelcomeMessage']);
    unset ($_SESSION['WelcomeMessage']);
    setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');
    session_destroy();
    header ('location: /acme/index.php');
    exit;
    break;
default: 
   
if(!$_SESSION['loggedin']) {
    $clientid = ($_SESSION['clientData']['clientId']);
}

    $reviews = getReviewsByClient(($_SESSION['clientData']['clientId']));

    if(count($reviews)>0){
    $reviewList = '<table>';

    $reviewList .= '<tr>'
            . '<th>PRODUCT</th>'
            . '<th>REVIEW DATE</th>'
            . '<th>EDIT</th>'
            . '<th>DELETE</th>'
            . '</tr>';
    $reviewList .= '<tbody>';
    foreach ($reviews as $review) {
        $date = date("F j, Y", strtotime($review['reviewDate']));
        $reviewList .= '<tr>';
        $reviewList .= '<td>$review[invName]</td>';
        $reviewList .= "<td>$date</td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rEdit&id=$review[reviewId]' title='Click to delete'>Edit</a></td>";
        $reviewList .= "<td><a href='/acme/reviews?action=rDelete&id=$review[reviewId]' title='Click to delete'>Delete</a></td>";
        $reviewList .= "</tr>";
    }
    $reviewList .= '</tbody></table>';
    $_SESSION['reviewList'] = $reviewList;

    }
    else{
        $message = '<p>No reviews found for this userid.</p>';
    } 

    if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    
    $_SESSION['regWelcomeMessage'] = "<p>Hello $cookieFirstname!</p>";
    if(isset($clientFirstname)){
    setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');}}
    
            include '../view/admin.php';
}

    