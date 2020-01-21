  <?php
  /* 
 * Reviews     Controller
 * 
* The needed processes are:
* 1. Add a new review
* 2. Deliver a view to edit a review.
* 3. Handle the review update.
* 4. Deliver a view to confirm deletion of a review.
* 5. Handle the review deletion.
* 6. A default that will deliver the "admin" view if the client is logged in or the
* acme home view if not.
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
    require_once '../model/products-model.php';
//Get the uploads model
    require_once '../model/uploads-model.php';        
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
//==============================================================================
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
//==============================================================================
//==============================================================================
switch ($action){            
//Show add new review
case 'add-newreview':
    unset($_SESSION['rmessage']);
    unset($_SESSION['emessage']);
    unset($_SESSION['dmessage']);
    $rText      = filter_input(INPUT_POST,'rText',FILTER_SANITIZE_STRING);
    $rInvId     = filter_input(INPUT_POST,'rInvId',FILTER_SANITIZE_NUMBER_INT);
    $rClientId  = filter_input(INPUT_POST,'rClientId',FILTER_SANITIZE_NUMBER_INT); 
    
    if (empty($rText) || 
        empty($rInvId) || 
        empty($rClientId)){
    $message = '<p>Review field cannot be empty.</p>';
    include '../view/product-detail.php';
    exit();
    }
    $reviewInserted = insertReview($rText,$rInvId,$rClientId);  
    if ($reviewInserted === 1){
        $rmessage = "<p>Thanks for sharing.</p>";
        $rmessage .= "<p>Your review has been added below.</p>";
         $itemReviews = getReviewsByItem($rInvId);
         $reviewsDisplay = buildReviewsDisplay($itemReviews);
         $_SESSION['rmessage'] = $rmessage;
        header("location:/acme/products/index.php?action=displayproduct&id=$rInvId");
        exit();
    } 
    else {
        $rmessage = "<p>Sorry, the update failed. Please try again.</p>";
        $_SESSION['rmessage'] = $rmessage;
        header("location:/acme/products/index.php?action=displayproduct&id=$rInvId");
        exit();
        }
//===========================================================================
//===========================================================================
case 'rEdit':  
    unset($_SESSION['rmessage']);
    unset($_SESSION['emessage']);
    unset($_SESSION['dmessage']); 
    $reviewId  = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    $reviewInfo = getReviewByReviewId($reviewId);
$eReviewId = ($reviewInfo['reviewId']);
$_SESSION['eReviewId'] = $eReviewId;

$eReviewText = ($reviewInfo['reviewText']);
$_SESSION['eReviewText'] = $eReviewText;

$eReviewDate = ($reviewInfo['reviewDate']);
$_SESSION['eReviewDate'] = $eReviewDate;

$eInvId = ($reviewInfo['invId']);
$_SESSION['eInvId'] = $eInvId;

$eClientId = ($reviewInfo['clientId']);
$_SESSION['eClientId'] = $eClientId;

$eInvName = ($reviewInfo['invName']);
$_SESSION['eInvName'] = $eInvName;
    include '../view/review-edit.php';
    exit;            
break;        

case 'do-rEdit': 
    $eReviewId = filter_input(INPUT_POST, 'eReviewId', FILTER_SANITIZE_NUMBER_INT);
    $eReviewText = filter_input(INPUT_POST, 'eReviewText', FILTER_SANITIZE_STRING);
     $reviewInfo = getReviewByReviewId($eReviewId);
$eInvName = ($reviewInfo['invName']);
$_SESSION['eInvName'] = $eInvName;
$eReviewDate = ($reviewInfo['reviewDate']);
$_SESSION['eReviewDate'] = $eReviewDate;


    if (empty($eReviewText)){
    $emessage = '<p>Comment cannot be blank.</p>';
   
 
    
    //header('location: /acme/view/review-update.php');
    include '../view/review-edit.php';
  
       exit();}
    
    $updateResult = updateReview($eReviewId,$eReviewText);
    if ($updateResult){
        $emessage = "<p>Your review was successfully updated.</p>";
       
    $_SESSION['emessage'] = $emessage;
    header("location:/acme/accounts/index.php?action=admin");
    exit;
    } else {
        $message = "<p>Sorry, the edit failed. Please try again.</p>";
        include '../view/review-edit.php';
        exit();} 
        break;

case 'rDelete':  
    unset($_SESSION['rmessage']);
    unset($_SESSION['emessage']);
    unset($_SESSION['dmessage']);
    $reviewId  = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    $reviewInfo = getReviewByReviewId($reviewId);
$dReviewId = ($reviewInfo['reviewId']);
$_SESSION['dReviewId'] = $dReviewId;

$dReviewText = ($reviewInfo['reviewText']);
$_SESSION['dReviewText'] = $dReviewText;

$dReviewDate = ($reviewInfo['reviewDate']);
$_SESSION['dReviewDate'] = $dReviewDate;

$dInvId = ($reviewInfo['invId']);
$_SESSION['dInvId'] = $dInvId;

$dClientId = ($reviewInfo['clientId']);
$_SESSION['dClientId'] = $dClientId;

$dInvName = ($reviewInfo['invName']);
$_SESSION['dInvName'] = $dInvName;
    include '../view/review-delete.php';
    exit;            
    break;    

case 'do-rDelete':
   $doReviewId = filter_input(INPUT_POST, 'doReviewId', FILTER_SANITIZE_NUMBER_INT);
    if (empty($doReviewId)){
        $dmessage = '<p>Delete failed.  Please try again.</p>';
        include '../view/review-delete.php';
        exit();}
        
    $deleteResult = deleteReview($doReviewId);    
    if ($deleteResult){
        $dmessage = "<p>Your review has been deleted.</p>";
       
    $_SESSION['dmessage'] = $dmessage;
    header("location:/acme/accounts/index.php?action=admin");
    exit;
    } else {
        $dmessage = "<p>Sorry, the delete failed. Please try again.</p>";
        include '../view/review-delete.php';
        exit();} 
        break;
    
default:

include '../view/admin.php';
break;
}