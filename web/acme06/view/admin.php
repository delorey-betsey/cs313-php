<?php 
//This test is to show if Session loggedin value is NOT true
//echo 'you hit admin check loggedin';
//echo $_SESSION['loggedin'];
//exit;
if(!$_SESSION['loggedin']) {
    $message = "<p>Please login to access the admin page.</p>";
    header('location:/acme/index.php');
    exit;
}
?>
<?php
$level = $_SESSION['clientData']['clientLevel'];
$firstname = $_SESSION['clientData']['clientFirstname'];
//echo 'you hit admin page';
//echo $level;
//echo $firstname;
//exit;
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
    <!-- COMMENT:  flexbox header     -->   
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>

    <!-- COMMENT:  flexbox nav     -->
    <nav>
        <?php echo $navList; ?>
    </nav>

    <!-- COMMENT:  flexbox main     -->  
<main class="mainAdmin">

<!-- logged in user first and last names    -->
    <div class='mainAdmin1'>
        
        <?php 
            echo $_SESSION['clientData']['clientFirstname'];
            echo ' ';
            echo $_SESSION['clientData']['clientLastname'];
        ?>
    </div>
        
<!-- display 4 user clientData fields>-->
    <div class="textAdmin" >
        <ul>
            <li>First name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $_SESSION['clientData']['clientFirstname'];
                ?>
            </li>
            <li>Last name:&nbsp;&nbsp;&nbsp; 
                <?php 
                    echo $_SESSION['clientData']['clientLastname'];
                ?>                    
            </li>
            <li>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                    echo $_SESSION['clientData']['clientEmail'];
                ?>                    
            </li>
            <li>User level: &nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                    echo $_SESSION['clientData']['clientLevel'];
                ?>                    
            </li>
        </ul>
    </div>

<!-- <div products/index.php link if clientLevel = 3... 
if user level is greater than 1 point to product controller via a link in paragraph tag
>-->
    <div class="prodhdg" >
        <?php if($level > 1){
            echo "<p><a href='/acme/products/index.php' title='Product Management'>Products</a></p>";
            }?>
    </div>
</main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>