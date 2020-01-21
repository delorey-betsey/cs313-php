<?php
    if(isset ($_SESSION['emessage'])){
    $emessage = ($_SESSION['emessage']);
    } 
    if(isset ($_SESSION['eReviewId'])){
        $eReviewId = ($_SESSION['eReviewId']);
    }
    if(isset ($reviewInfo['eReviewText'])){
        $eReviewText = ($_SESSION['eReviewText']);
    }
    if(isset ($reviewInfo['eInvName'])){
        $eInvName = ($_SESSION['eInvName']);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REVIEW EDIT</title>
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

<!-- COMMENT:  EDIT REVIEW     -->
<div class="formdiv">
    <?php
    if (isset($emessage)) {
     echo $emessage;
    }?>
    <?php $substrDate = date("F j, Y", strtotime($eReviewDate)); ?>
    <?php    
    $eform = '<div><form action="/acme/reviews/index.php" method="post">';
 
    $eform .= '<label>';
    $eform .= "<span>Product: $eInvName </span>"; 
    $eform .= '</label>'; 
    
    $eform .= '<label>';
    $eform .= "<span>Review dated: $substrDate</span>"; 
    $eform .= '</label>';
              
    $eform .= '<label>';
    $eform .= "<span>You may edit your comment below.</span>"; 
    $eform .= '</label>';
    
    $eform .= '<label>';
    $eform .= "<textarea name='eReviewText' class='inputfld' rows='10' cols='50' 
required>$eReviewText</textarea>
                </label>";
    
// INPUT BLANK     -->                 
    $eform .= '<label>';
    $eform .= '</label>';  
    
// INSERT NEW REVIEW     -->                 
    $eform .= '<div><label>';   
    $eform .= '<input type="submit" value="Submit Update" class="submit">';
    $eform .= '<input type="hidden" name="action" value="do-rEdit">'; 
    $eform .= "<input type='hidden' name='eReviewId' value='$eReviewId'>";   
    $eform .= '</label></div>'; 
    
    $eform .= '</form></div>';
    echo $eform; 
//    exit;
    ?>
</div>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>