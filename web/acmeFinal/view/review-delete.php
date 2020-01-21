<?php
    if(isset ($_SESSION['dReviewId'])){
        $dReviewId = ($_SESSION['dReviewId']);
    }
    if(isset ($reviewInfo['dReviewText'])){
        $dReviewText = ($_SESSION['dReviewText']);
    }
    if(isset ($reviewInfo['dReviewDate'])){
        $dReviewDate = ($_SESSION['dReviewDate']);
    }
    if(isset ($reviewInfo['dInvId'])){
        $dInvId = ($_SESSION['dInvId']);
    }
    if(isset ($reviewInfo['dClientId'])){
        $dClientId = ($_SESSION['dClientId']);
    }
    if(isset ($reviewInfo['dInvName'])){
        $dInvName = ($_SESSION['dInvName']);
    }
    if(isset ($_SESSION['dmessage'])){
    $dmessage = ($_SESSION['dmessage']);
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REVIEW DELETE</title>
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
    if (isset($dmessage)) {
     echo $dmessage;
    }?>
    <?php $substrDate = date("F j, Y", strtotime($dReviewDate)); ?> 
    <?php
    
    $dform = '<div><form action="/acme/reviews/index.php" method="post">';
    
    $dform .= '<label>';
    $dform .= "<span>You may delete your comment below.</span>"; 
    $dform .= "<span>THIS ACTION CANNOT BE UNDONE.</span>";
    $dform .= '</label>';
    
    $dform .= '<label>';
    $dform .= "<span>Product reviewed: &nbsp;&nbsp; $dInvName </span>"; 
    $dform .= '</label>'; 
    
    $dform .= '<label>';
    $dform .= "<span>Review date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$substrDate</span>"; 
    $dform .= '</label>';
              
    $dform .= '<label>';
    $dform .= "<span>Deleting a review is permanent.</span>";
    $dform .= '</label>';
    
    $dform .= '<label>';
    $dform .= "<textarea name='dReviewText' class='inputfld' rows='10' cols='50' 
required>$dReviewText</textarea>
                </label>";
    
// INPUT BLANK     -->                 
    $dform .= '<label>';
    $dform .= '</label>';  
    
// DELETE PRODUCT  -->                 
    $dform .= '<label>';   
    $dform .= '<input type="submit" value="Confirm Delete" class="submit" >'; 
    $dform .= '<!--Add the action key - value pair-->'; 
    $dform .= '<input type="hidden" name="action" value="do-rDelete">'; 
    $dform .= "<input type='hidden' name='doReviewId' value='$dReviewId'>"; 
    $dform .= '</label>'; 
    
    $dform .= '</form></div>';
    echo $dform; 
//    exit;
    ?>
</div>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>