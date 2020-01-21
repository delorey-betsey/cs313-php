<?php 
if(!$_SESSION['loggedin']) {
    $message = "<p>Please login to access the admin page.</p>";
    header('location:/acme/index.php');
    exit;}
?>
<?php
if (isset($_SESSION['reviewList'])) {
    $reviewList     = $_SESSION['reviewList'];
}
//from login query
$level      = $_SESSION['clientData']['clientLevel'];
$firstname  = $_SESSION['clientData']['clientFirstname'];
$lastname   = $_SESSION['clientData']['clientLastname'];
$email      = $_SESSION['clientData']['clientEmail'];
//from update user info query
if (isset($_SESSION['clientInfo2'])) {
    $firstname     = $_SESSION['clientInfo2']['clientFirstname'];
    $lastname      = $_SESSION['clientInfo2']['clientLastname'];
    $email         = $_SESSION['clientInfo2']['clientEmail'];
}
//from update password query
if (isset($_SESSION['clientInfo3'])) {
    $firstname     = $_SESSION['clientInfo3']['clientFirstname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACME ADMIN BD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/acme/css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>
<!-- COMMENT:  header     -->   
<?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
<!-- COMMENT:  nav     -->
<nav>
    <?php echo $navList; ?>    </nav>
<!-- COMMENT:  main     -->  
<main class="mainAdmin">
    <?php
        echo '<div class="textAdmin1">';
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            echo $message;
        } 
        if (isset($_SESSION['emessage'])) {
            $emessage = $_SESSION['emessage'];
            echo $emessage;
        } 
        if (isset($_SESSION['dmessage'])) {
            $dmessage = $_SESSION['dmessage'];
            echo $dmessage;
        } 
        echo '</div>';
    ?>  
<!-- logged in user first and last names    --> 
    <div class='mainAdmin2'>        
        <?php 
            echo $firstname;
            echo ' ';
            echo $lastname;
        ?>
    </div> 
<!-- logged in msg -->
    <div id="description-display">You are logged in.</div>
<!-- session message if set -->
      
<!-- display 4 user clientData fields -->
    <div class="textAdmin" >
        <ul>
            <li id="description-display">First name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $firstname;
                ?>
            </li>
            <li id="description-display">Last name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $lastname;
                ?>                    
            </li>
            <li id="description-display">
                Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                    echo $email;
                ?>                    
            </li>
            <li>
            <div id="description-display">
                <a class="updtlink" href='/acme/accounts/index.php?action=updtclient' 
              title='Update account information'>Update Account Information</a>
            </div>
            </li>
        </ul>
    </div>

<!-- Administrative Functions headings -->   
<!-- display 4 user clientData fields -->

    <div class="textAdmin" >
        <div class="mainAdmin2">Administrative Functions</div>

        <ul>            
            <?php if($level > 1){
                echo '<div id="description-display">';
                echo 'Use link below to manage products.';
                echo '</div>';
                echo '<li id="description-display">';
                echo '<p><a class="updtlink" href="/acme/products/index.php" 
                      title="Product Management">Products</a></p>';
            echo '</li>';}
            ?>
			
            <li id="description-display">
            <?php 
                if (isset($_SESSION['reviewList'])) {
                echo '<p class="updtlinkblk">Manage Your Product Reviews:</p>';
                echo $reviewList;}
            ?>                    
            </li>
			
        </ul>
    </div>

</main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>
