<?php 
//This test is to show if Session loggedin value is NOT true
if(!$_SESSION['loggedin']) {
    $message = "<p>Please login to access the admin page.</p>";
    header('location:/acme/index.php');
    exit;}
//echo 'you hit view client-update';
//exit;
if (isset($_SESSION['message'])) {
 $message = $_SESSION['message'];
} 
?>
<?php
    $clientInfoId           = $_SESSION['clientInfo']['clientId'];
    $clientInfoFirstname    = $_SESSION['clientInfo']['clientFirstname'];
    $clientInfoLastname     = $_SESSION['clientInfo']['clientLastname'];
    $clientInfoEmail        = $_SESSION['clientInfo']['clientEmail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACME CLIENT UPDATE BD</title>
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
<main>
<!-- COMMENT:  main FORM 1 FOR FIRST LAST EMAIL PASSWORD    -->        
<div class="formdiv">
    <?php
    if (isset($message)) {
     echo $message;
    }?>
    <h1>Update Account Info</h1>
    <h3>Use this form to update your name or email information.</h3>

    <form action="/acme/accounts/index.php" method="post" name="admin">
        <label>
            <span >First Name</span>
            <input class="inputfld" name="ciFirstname" type="text"
                <?php if(isset($clientInfoFirstname)){echo "value='$clientInfoFirstname'";} ?> 
                placeholder="Wiley" required>
        </label>
        <label>
            <span >Last Name</span>
            <input class="inputfld" name="ciLastname" type="text" 
                <?php if(isset($clientInfoLastname)){echo "value='$clientInfoLastname'";} ?> 
                placeholder="Coyote" required>
        </label>                
        <label><span>Email Address</span>
            <input class="inputfld" name="ciEmail" type="email"                     
            <?php if(isset($clientInfoEmail)){echo "value='$clientInfoEmail'";} ?>
                placeholder="you@web.domain" required>
        </label>
        <label>
        </label>               
        <label>   
            <input type="submit" value="Update Account" class="submit">
        <!--Add the action key - value pair-->
            <input type="hidden" name="action" value="updtacct" >                
            <input type="hidden" name="ciId" value="
                <?php 
                    if(isset($clientInfo['clientId'])){ 
                        echo $clientInfo['clientId'];                                
                    } elseif(isset($clientId)){ 
                        echo $clientId; } 
                ?>">
        </label> 
    </form> 

<!-- ======================================================================= -->         
<!-- COMMENT:  main FORM 2 TO CHANGE PASSWORD=============================== --> 
<!-- ======================================================================= --> 
      
    <div >
        <h1 id="pwordhdr">Change Password</h1>
        <h3>Use this form to update password.</h3>
        <form action="/acme/accounts/index.php" method="post" name="client-update">
            <label>
                <span class="passwordspan">Password</span>                             
                <input class="inputfld" name="ciPassword" type="password" 
                    pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    placeholder="*R*R*stew!" required>
            </label>
            <label>
                <span class="passwordparameters">Passwords must be at least 8 
                    characters with at least 1 each 
                    number, capital letter and special character.
                </span>
            </label>
            <label>
            </label>               
            <label>   
                <input type="submit" value="Change Password" class="submit">
<!--Add the action key - value pair-->
                <input type="hidden" name="action" value="updtpword" > 
                <input type="hidden" name="ciId" value="
                    <?php 
                        if(isset($clientInfo['clientId'])){ 
                            echo $clientInfo['clientId'];                                
                        } elseif(isset($clientId)){ 
                            echo $clientId; } 
                    ?>">
            </label> 
        </form>         
    </div> 
</div>
</main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html><?php


