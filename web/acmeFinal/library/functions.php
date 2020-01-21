<?php
/* 
 * Functions:
 * checkEmail
 * checkPassword
 * buildNav
 * buildProductsDisplay
 * buildItemDisplay
 * makeThumbnailName
 * buildImageDisplay
 * buildProductsSelect
 * uploadFile
 * processImage
 * resizeImage
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
    $navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
    foreach ($categories as $category) {
        $navList .= 
            "<li>
                <a href='/acme/products/index.php?action=displaycategory&type=".urlencode($category['categoryName'])."' 	
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
    $pd .= "<a href='/acme/products/index.php?action=displayproduct&id=$product[invId]'"
            . " title='View our $product[invName] product line'><img src='$product[invThumbnail]' "
            . "alt='Image of $product[invName] on Acme.com'></a>";
    
    $pd .= "<a href='/acme/products/index.php?action=displayproduct&id=$product[invId]' 	
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
        $sgldisplay .= "<div class='bottom'>Product reviews appear at the "
                . "<a class='bottomlink' href='#bottom'>bottom of the page</a></div>";
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
/* * ********************************
* Functions for working with images
* ********************************* */
// Adds "-tn" designation to file name
function makeThumbnailName($image) {
 $i = strrpos($image, '.');
 $image_name = substr($image, 0, $i);
 $ext = substr($image, $i);
 $image = $image_name . '-tn' . $ext;
 return $image;
}
//// Build the products select list
function uploadFile($name) {
 // Gets the paths, full and local directory
 global $image_dir, $image_dir_path;
 if (isset($_FILES[$name])) {
  // Gets the actual file name
  $filename = $_FILES[$name]['name'];
  if (empty($filename)) {
   return;
  }
 // Get the file from the temp folder on the server
 $source = $_FILES[$name]['tmp_name'];
 // Sets the new path - images folder in this directory
 $target = $image_dir_path . '/' . $filename;
 // Moves the file to the target folder
 move_uploaded_file($source, $target);
 // Send file for further processing
 processImage($image_dir_path, $filename);
 // Sets the path for the image for Database storage
 $filepath = $image_dir . '/' . $filename;
 // Returns the path where the file is stored
 return $filepath;
 }
}
// Processes images by getting paths and 
// creating smaller versions of the image
function processImage($dir, $filename) {
 // Set up the variables
 $dir = $dir . '/';

 // Set up the image path
 $image_path = $dir . $filename;

 // Set up the thumbnail image path
 $image_path_tn = $dir.makeThumbnailName($filename);

 // Create a thumbnail image that's a maximum of 200 pixels square
 resizeImage($image_path, $image_path_tn, 200, 200);

 // Resize original to a maximum of 500 pixels square
 resizeImage($image_path, $image_path, 500, 500);
}
// Checks and Resizes image
function resizeImage($old_image_path, $new_image_path, $max_width, $max_height) {

 // Get image type
 $image_info = getimagesize($old_image_path);
 $image_type = $image_info[2];

 // Set up the function names
 switch ($image_type) {
 case IMAGETYPE_JPEG:
  $image_from_file = 'imagecreatefromjpeg';
  $image_to_file = 'imagejpeg';
 break;
 case IMAGETYPE_GIF:
  $image_from_file = 'imagecreatefromgif';
  $image_to_file = 'imagegif';
 break;
 case IMAGETYPE_PNG:
  $image_from_file = 'imagecreatefrompng';
  $image_to_file = 'imagepng';
 break;
 default:
  return;
 }

 // Get the old image and its height and width
 $old_image = $image_from_file($old_image_path);
 $old_width = imagesx($old_image);
 $old_height = imagesy($old_image);

 // Calculate height and width ratios
 $width_ratio = $old_width / $max_width;
 $height_ratio = $old_height / $max_height;

 // If image is larger than specified ratio, create the new image
 if ($width_ratio > 1 || $height_ratio > 1) {

  // Calculate height and width for the new image
  $ratio = max($width_ratio, $height_ratio);
  $new_height = round($old_height / $ratio);
  $new_width = round($old_width / $ratio);

  // Create the new image
  $new_image = imagecreatetruecolor($new_width, $new_height);

  // Set transparency according to image type
  if ($image_type == IMAGETYPE_GIF) {
   $alpha = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
   imagecolortransparent($new_image, $alpha);
  }

  if ($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_GIF) {
   imagealphablending($new_image, false);
   imagesavealpha($new_image, true);
  }

  // Copy old image to new image - this resizes the image
  $new_x = 0;
  $new_y = 0;
  $old_x = 0;
  $old_y = 0;
  imagecopyresampled($new_image, $old_image, $new_x, $new_y, $old_x, $old_y, $new_width, $new_height, $old_width, $old_height);

  // Write the new image to a new file
  $image_to_file($new_image, $new_image_path);
  // Free any memory associated with the new image
  imagedestroy($new_image);
  } else {
  // Write the old image to a new file
  $image_to_file($old_image, $new_image_path);
  }
  // Free any memory associated with the old image
  imagedestroy($old_image);
}
// Build images display for image management view
function buildImageDisplay($imageArray) {
 $id = '<ul id="existing-display">';
 foreach ($imageArray as $image) {
  $id .= "<li class='existingli'>";
  $id .= "<img src='$image[imgPath]' title='$image[invName] image on Acme.com' "
          . "alt='$image[invName] image on Acme.com'>";
  $id .= "<div class='p1'><a href='/acme/uploads?action=delete&imgId=$image[imgId]&filename=$image[imgName]' title='Delete the image'>Delete $image[imgName]</a></p>";
  $id .= '</li>';
 }
 $id .= '</ul>';
 return $id;
}
// Build thumbnails display for product detail view
function buildThumbnailDisplay($thumbnailArray) {
$td = '<div id="thumbnail-div">';
    $td .= '<h3>Product Thumbnails</h3>';
    $td .= '<ul id="thumbnail-display">';
foreach ($thumbnailArray as $thumbnail) {
    $td .= "<li class='thumbnailli'>";
    $td .= "<img src='$thumbnail[imgPath]' title='$thumbnail[imgName] image on Acme.com' "
            . "alt='$thumbnail[imgName] image on Acme.com'>";
    $td .= '</li>';
    }
    $td .= '</ul>';
$td .= '</div>';
return $td;
}
/* 
 * Build reviews select list
 */
function buildReviewsSelect($reviews) {
 $reviewList = '<select name="reviewId" id="reviewId">';
 $reviewList .= "<option>Choose a Review</option>";
 foreach ($reviews as $review) {
  $reviewList .= "<option value='$review[reviewId]'>$review[Name]</option>";
 }
 $reviewList .= '</select>';
 return $reviewList;
}
/* 
 * Function to build $reviewsDisplay for display of product reviews on prduct-detail page.
 */
function buildReviewsDisplay($itemReviews){
 $rd = '<ul class="reviews-display">';
 foreach ($itemReviews as $review) {
    $date = date("F j, Y", strtotime($review['reviewDate'])); 
    $first = substr($review['clientFirstname'], 0, 1);
    $screenName = $first . $review['clientLastname'];
    $rd .= "<li class='screenName' >$screenName wrote on $date: </li>";
    $rd .= "<li class='reviewText' >$review[reviewText]</li>";}
    $rd .= '</ul>';
    return $rd;
}
