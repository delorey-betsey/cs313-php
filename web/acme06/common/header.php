

<header>   
    <!-- COMMENT:  logo     -->
    <div class="logo" >
        <img  src="/acme/images/site/logo.gif" alt= "ACME" id="logoimg" />         
    </div>
    <!-- COMMENT:  tools     -->
    <div class="tools" >
    <!-- Show welcome in header if logged in -->
        <?php    
        if(!isset ($_SESSION['loggedin'])){
        if(isset($cookieFirstname)){
            echo "<span>Welcome $cookieFirstname</span>";
            }
        }
        ?>
    <!--Show My Account link if logged out OR Logout link if logged in-->
        <?php
//echo 'you hit if test for my account link';
//echo ($_SESSION['loggedin']);
    //  If loggedin = TRUE       
        if(isset ($_SESSION['loggedin'])){
            echo '<a href="/acme/accounts/index.php?action=logout" id="myaccount" 
                    title="Logout">Logout</a>';
                } else {                   
    //  If loggedin = FALSE
    //    if(!isset ($_SESSION['loggedin'])){
            echo '<a href="/acme/accounts/index.php?action=login" id="myaccount" 
            title="My Account" >My Account</a>';
            }
        ?>
    </div>
</header>

