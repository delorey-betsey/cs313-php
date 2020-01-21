<?php
/* 
 * Functions:
 * checkEmail
 * checkPassword
 * buildNav
 */

/* 
 * Function to check the format of the $clientEmail variable after its been sanitized.
 * Returns true if valid or false if not valid.
 */
function checkEmail($clientEmail){
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}
/* 
 * Function to check the format of the $clientPassword variable after its been sanitized.
 * 8 characters min, 1 cap, 1 lower, 1 special character.
 * Returns 1 if matches, 0 if it does not.
 */
function checkPassword($clientPassword){
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $clientPassword);
}
/* 
 * Function to build $navList for main navigation bar.
 */
function buildNav($categories){
    $navList = '<ul>';
    $navList .= "<li><a href='.' title='View the Acme home page'>Home</a></li>";
    foreach ($categories as $category) {
        $navList .= 
            "<li>
                <a href='/acme/index.php?action=".urlencode($category['categoryName'])."' 	
                    title='View our $category[categoryName] product line'>	
                $category[categoryName]</a>
            </li>";
        }
    $navList .= '</ul>';
    return $navList;    
    }
