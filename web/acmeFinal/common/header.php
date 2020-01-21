<?php
    if(isset ($_SESSION['welcomeMessage'])){
        $welcomeMessage = ($_SESSION['welcomeMessage']);        
        $rclientId = ($_SESSION['rclientId']);

    } 
    if(isset ($_SESSION['regWelcomeMessage'])){
        $regWelcomeMessage = ($_SESSION['regWelcomeMessage']);        
//        setcookie('firstname', $clientFirstname, strtotime('-1 year'), '/');
        
    }
//        
//echo 'welcomemsg = ';
//echo $welcomeMessage;
//    echo '$_SESSION regWelcomeMessage =';
//    echo ($_SESSION['regWelcomeMessage']);
//echo 'regWelcome = ';
//echo $regWelcomeMessage;
//exit;
?>

<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <img  src="/acme/images/site/logo.gif" alt= "ACME" id="logoimg" />         
    </div>
    <!-- COMMENT:  tools     -->
    <div class="tools" >        
        
<!-- Show welcome in header if logged in -->
        <?php  

        if(isset ($_SESSION['loggedin'])){
//echo 'you hit logged in';    
//exit;
            echo "<a href='/acme/accounts/index.php?action=admin' id='welcome'>$welcomeMessage</a>"; 
        } else {
            if(isset($regWelcomeMessage)){
// echo 'you hit regWelcome';  
// exit;             
            echo "<div id='welcome'>$regWelcomeMessage</div>"; 
        } }
////        else {
// echo 'you hit nothing1';
//////exit;           
////        }
//        
//        }
        ?>
    
<!--Show My Account link if logged out OR Logout link if logged in-->
        <?php
      
        if(isset ($_SESSION['loggedin'])){
            echo '<a href="/acme/accounts/index.php?action=logout" id="myaccount" 
                    title="Logout">Logout</a>';
                } else {                   

            echo '<a href="/acme/accounts/index.php?action=login" id="myaccount" 
            title="My Account" >My Account</a>';
            }
        ?>
    </div>
</header>

