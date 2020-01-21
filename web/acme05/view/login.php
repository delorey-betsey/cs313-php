<!DOCTYPE html>
<html>
    <head>
        <title>ACME LOGIN BD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/acme/css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    </head>

    <body>
        <!-- TEMPLATE  --> 
        <!-- COMMENT:  flexbox header     -->   
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>

        <!-- COMMENT:  flexbox nav     -->
        <nav>
            <?php echo $navList; ?>
        </nav>

        <!-- COMMENT:  flexbox main   FORM FOR EMAIL AND PASSWORD  --> 
<main>
    <div class="formdiv">
        <h1>Acme Login</h1>
            <?php
                if (isset($message)) {
                 echo $message;
                }?>
        <form action="/acme/accounts/index.php" method="post" name="login">
            <label><span>Email Address</span>
                <input class="inputfld" name="clientEmail" type="email"                     
                <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?>
                    placeholder="you@web.domain" required>
            </label>
            <label>
                <span class="passwordspan">Password</span>                             
                <input class="inputfld" name="clientPassword" type="password"
            pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                    placeholder="*R*R*stew!" required>
            </label>
            <label>
                <span class="passwordparameters">Passwords are at least 8 characters with at least 1 each 
                    number, capital letter and special character.
                </span>
            </label>
            <label>
            </label>
            <label>
                <input type="submit" value="Login" class="submit" >
                <!--Add the action key - value pair-->
                <input type="hidden" name="action" value="loginData">
            </label>
        </form> 
            

        <div class="forgotpassword" >            
            <a href="/acme/accounts/index.php?action=forgotpassword" 
               title="registration" id="forgotpassword">Forgot password?</a>
        </div> 

        <h1 class="newacctpad">Acme New Account</h1>

        <div class="createacct" >            
            <a href="/acme/accounts/index.php?action=registration" 
               title="registration" >Create Account</a>
        </div> 
    </div>
</main>

        <!-- COMMENT:  flexbox footer     --> 
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

    </body>
</html>