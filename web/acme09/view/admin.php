<?php 
//This test is to show if Session loggedin value is NOT true
if(!$_SESSION['loggedin']) {
    $message = "<p>Please login to access the admin page.</p>";
    header('location:/acme/index.php');
    exit;}
?>
<?php
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
//    $message2      = $_SESSION['message2'];
//    unset ($_SESSION['message2']);
}
//from update password query
if (isset($_SESSION['clientInfo3'])) {
    $firstname     = $_SESSION['clientInfo3']['clientFirstname'];
//    $message3      = $_SESSION['message3'];
//    unset ($_SESSION['message3']);
}
?>
<!DOCTYPE html>
<html>
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
        <?php echo $navList; ?>
    </nav>

<!-- COMMENT:  main     -->  
<main class="mainAdmin">
    <?php
        echo '<div class="textAdmin1">';
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            echo $message;
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
    <div class="textAdmin">You are logged in.</div>
<!-- session message if set -->
      
<!-- display 4 user clientData fields -->
    <div class="textAdmin" >
        <ul>
            <li>First name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $firstname;
                ?>
            </li>
            <li>Last name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $lastname;
                ?>                    
            </li>
            <li>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                    echo $email;
                ?>                    
            </li>
        </ul>
    </div>
<!-- Update Account Information link -->
    <div class="prodhdg" >
        <p><a href='/acme/accounts/index.php?action=updtclient' 
              title='Update account information'>Update Account Information</a>
        </p>
    </div>
<!-- Administrative Functions headings -->

    <?php if($level > 1){
        echo '<div class="mainAdmin2">Administrative Functions</div>';
        echo '<div class="textAdmin">Use link below to manage products.</div>';            
    }?>

<!-- if admin user-display Products product management link-->
     <div class="prodhdg" >
        <?php if($level > 1){
            echo "<p><a href='/acme/products/index.php' title='Product Management'>Products</a>"
                . "</p>";
        }?>
    </div>
</main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>