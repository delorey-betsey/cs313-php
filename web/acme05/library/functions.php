<?php
/* 
 * Function checkEmail()
 * Function checkPassword()
 * Function buildNav()
 */

/* 
 * Function to check the value of the $clientEmail variable after its been sanitized.
 */
function checkEmail($clientEmail){
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}
/* 
 * Function to check the password meets the format requirements.
 * 8 characters min, 1 cap, 1 lower, 1 special character.
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
