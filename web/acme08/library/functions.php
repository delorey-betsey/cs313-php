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
                <a href='/acme/products/index.php?action=category&type=".urlencode($category['categoryName'])."' 	
                    title='View our $category[categoryName] product line'>$category[categoryName]</a>
            </li>";
        }
    $navList .= '</ul>';
    return $navList;    
    }
/* 
 * Function to build $pd for display of products within an unordered list.
 */
function buildProductsDisplay($products){
    
 $pd = '<ul id="prod-display">';
 foreach ($products as $product) {
    $pd .= '<li class="item-display">';
    $pd .= "<a href='/acme/products/index.php?action=display&id=$product[invId]'"
            . " title='View our $product[invName] product line'><img src='$product[invThumbnail]' "
            . "alt='Image of $product[invName] on Acme.com'></a>";
    
    $pd .= "<a href='/acme/products/index.php?action=display&id=$product[invId]' 	
                    title='View our $product[invName] product line'><h2>$product[invName]</h2></a>";
    $pd .= "<span>$$product[invPrice]</span>";
    $pd .= '</li>';
 }
 $pd .= '</ul>';
 return $pd;
}
/* 
 * Function to build $pd for display of products within an unordered list.
 */
function buildItemDisplay($item){
 $sgldisplay = '<div class="item-display">';    

    $sgldisplay .= "<img src='$item[invImage]' id='image-display' "
            . "alt='Image of $item[invName] on Acme.com'>";
    
    $sgldisplay .= '<div id="text-display">';
        $sgldisplay .= "<div id='name-display'>$item[invName]</div>";
        $sgldisplay .= "<div id='description-display'>$item[invDescription]</div>";
        $sgldisplay .= "<br><br>";
        
        $sgldisplay .= "<ul>";
            $sgldisplay .= "<li>A $item[invVendor] product.</li>";
            $sgldisplay .= "<li>Primary material: $item[invStyle].</li>";
            $sgldisplay .= "<li>Product weight: $item[invWeight] lbs.</li>";
            $sgldisplay .= "<li>Shipping size: $item[invSize] inches (W x L x H).</li>";
            $sgldisplay .= "<li>Ships from $item[invLocation].</li>";
        $sgldisplay .= "</ul>";
        $sgldisplay .= "<div id='price-display'>$ $item[invPrice]</div>";
    $sgldisplay .= '</div>';
    
    
    
$sgldisplay .= '</div>';  
 return $sgldisplay;
}
