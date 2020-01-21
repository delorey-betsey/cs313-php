<?php
    if(isset ($_SESSION['loggedin'])){
        $loggedin = TRUE;
        } else {
        $notloggedin = TRUE;}
    if(isset ($_SESSION['clientFirst'])){
    $clientFirstI = substr(($_SESSION['clientFirst']),0,1);
    }
    if(isset ($_SESSION['clientLast'])){
    $clientLast = ($_SESSION['clientLast']);
    }
    if(isset ($_SESSION['clientLevel'])){
    $clientLevel = ($_SESSION['clientLevel']);
    }
    if(isset ($_SESSION['rclientId'])){
    $rclientId = ($_SESSION['rclientId']);
    }
    if(isset ($_SESSION['rprodName'])){
    $rprodName = ($_SESSION['rprodName']);
    }
    if(isset ($_SESSION['rmessage'])){
    $rmessage = ($_SESSION['rmessage']);
    } 
//    echo $rmessage;
//    exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $item['invName']; ?> | Acme, Inc.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/acme/css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    </head>

<body>
<!-- COMMENT:  flexbox header     -->   
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>

<!-- COMMENT:  flexbox nav     -->
    <nav>
        <?php echo $navList; ?>
    </nav>

<!-- COMMENT:  flexbox main     --> 
<!-- Item display and thumbnails display     -->
     
    <?php if(isset($message)){ echo $message; } ?>
    <?php if(isset($sglDisplay)){ echo $sglDisplay; } ?>
    
    <?php if(isset($thumbnailDisplay)){ echo $thumbnailDisplay; } ?>
    <?php if(isset($tmessage)){ echo $tmessage; } ?>
    <div id='whitespace'>hello</div>
    
<!--    <div class="proddiv" id="reviews-title"><span>Customer Reviews</span></div>
    <a id="bottom"></a> -->    
    <div class="proddiv">    
        <?php
        if (isset($message)) {
         echo $message;
        }?>
        <?php
        if (isset($rmessage)) {
         echo $rmessage;
        }?>
    </div>
    
<!-- COMMENT:  Display Reviews     --> 
<!-- If NOT logged in     -->
<div class="proddiv">
<?php
if (isset($notloggedin)) {
    $loginmsg = '<div id="reviews-title">Customer Reviews</div>';
    $loginmsg .= "<div id='reviews-for'>Reviews for: &nbsp;$rprodName</div>";
    $loginmsg .= '<a id="bottom"></a>';
    
    $loginmsg .= '<span>'; 
    $loginmsg .= '<a href="/acme/accounts/index.php?action=login" id="rlogin" title="Login Link" >LOGIN</a>';
    $loginmsg .= ' to add a new review.</span>';
    echo $loginmsg;
} else {
//if($clientLevel > 1){
    // If logged in = TRUE     -->
    $rform = '<div id="reviews-title">Customer Reviews</div>';
    $rform .= '<a id="bottom"></a>';
    
    $rform .= '<div class="reviewtext"><form action="/acme/reviews/index.php" '
            . 'method="post" name="add-newreview">';
//Screen NAME  --> 
    $rform .= '<label id="reviews-for">';
    $rform .= "Reviews for: &nbsp;$rprodName"; 
    $rform .= '</label>'; 
// INPUT REVIEW TEXTAREA                   
    $rform .= '<label class="screenName">';
    $rform .= "Screen Name:&nbsp; &nbsp; $clientFirstI$clientLast";  
    $rform .= '</label>';
    $rform .= '<label class="screenNamebl">';
    $rform .= 'Add a new review.';  
    $rform .= '</label>';
    
    $rform .= '<label>';
    $rform .= '<textarea name="rText" class="rinputfld" rows="10" cols="50" required></textarea>';
    $rform .= '</label>';
    
// INPUT BLANK     -->                 
    $rform .= '<label>';
    $rform .= '</label>';  
    
// INSERT NEW REVIEW     -->                 
    $rform .= '<div><label>';   
    $rform .= '<input type="submit" value="Submit Review" class="submit">';
    $rform .= '<input type="hidden" name="action" value="add-newreview">'; 
    $rform .= "<input type='hidden' name='rInvId' value='$rInvId'>";    
    $rform .= "<input type='hidden' name='rClientId' value='$rclientId'>";
    $rform .= '</label></div>'; 
    
    $rform .= '</form></div>';
    echo $rform;}
//    exit;
?>
</div>
<div class="reviewdiv">
    <?php if(isset($reviewsDisplay)){ echo $reviewsDisplay; } ?>    
</div>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
    
</body>
</html>