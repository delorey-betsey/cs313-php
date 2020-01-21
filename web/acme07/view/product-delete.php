<?php
if (($_SESSION['loggedin']) and  (($_SESSION['clientData']['clientLevel']) > 1)){
    } else {
    header('location:/acme/index.php');
    exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        <?php 
            if(isset($prodInfo['invName'])){ 
                echo "Delete $prodInfo[invName] ";
                } elseif(isset($invName)) { 
                echo $invName;}
        ?> | ACME DELETE PRODUCT BD
        </title>
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

    <!-- COMMENT:  FORM FOR DELETE    -->  
    <main>
        
        <div class="formdiv">
            <h1>
            <?php 
                if(isset($prodInfo['invName'])){ 
                    echo "Delete $prodInfo[invName] ";                    
                } elseif(isset($invName)) { 
                    echo $invName;                     
                }
            ?>
            </h1>
            <h3>Confirm product delete.  The DELETE is permanent!
            </h3>
            <?php
                if (isset($message)) {
                 echo $message;
                }?>
            <form action="/acme/products/index.php" method="post" name="del">

<!-- CONFIRMATION PRODUCT NAME TEXT  --> 
                <label>
                    <span >Product Name</span>
                    <input class="inputfld"  name="invname" type="text" 
                        <?php 
                            if(isset($invName)){
                                echo "value='$invName'";
                            } elseif(isset($prodInfo['invName'])) {
                                echo "value='$prodInfo[invName]'";
                            }  
                        ?>
                        required readonly>
                </label> 
<!-- CONFIRMATION DESCRIPTION TEXTAREA    -->                 
                <label>
                    <span >Product Description</span>                             
                </label>
                <label>
                    <textarea name="invdescription" class="inputfld" rows="10" cols="50" 
                        readonly>
                        <?php 
                            if(isset($invDescription)){
                                echo "value='$invDescription'";
                            } elseif(isset($prodInfo['invDescription'])) {
                                echo "value='$prodInfo[invDescription]'";
                            } 
                        ?>                    
                    </textarea>
                </label>
<!-- INPUT BLANK     -->                 
                <label>
                </label>  
<!-- DELETE PRODUCT  -->                 
                <label>   
                    <input type="submit" value="Delete" class="submit" >
                    <!--Add the action key - value pair-->
                    <input type="hidden" name="action" value="deleteprod">
                    <input type="hidden" name="invid" value="<?php 
                            if(isset($prodInfo['invId'])){ 
                                echo $prodInfo['invId'];}?>">
                </label> 
            </form>
        </div>    
    </main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html><?php
