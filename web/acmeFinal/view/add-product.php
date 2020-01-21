<?php
if (($_SESSION['loggedin']) and  (($_SESSION['clientData']['clientLevel']) > 1)){
    } else {
    header('location:/acme/index.php');
    exit;
    }
?>
<?php
    //Build the categories option list 
    $catList = '<select name="categoryId" class="inputfld">';
    $catList .= "<option value=''>Choose a Category</option>";
    foreach ($categoryids as $categoryid) {        
        $catList .= "<option value='$categoryid[categoryId]'";        
        if(isset($categoryId)){
            if($categoryid['categoryId'] === $categoryId) {
                $catList .= ' selected ';
            } 
        }
        $catList .= ">$categoryid[categoryName]</option>";
        }
    $catList .= '</select>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACME ADD PRODUCT BD</title>
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

    <!-- COMMENT:  flexbox main FORM FOR FIRST LAST EMAIL PASSWORD    -->  
    <main>
        
        <div class="formdiv">
            <h1>Add Product</h1>
            <h3>Add a new product below. All fields are required!
            </h3>
            <?php
                if (isset($message)) {
                 echo $message;
                }?>
            <form action="/acme/products/index.php" method="post" name="addprod">
<!-- INPUT $CATLIST     -->                 
                <label><br>
                <?php echo $catList; 
                //echo $categoryid[categoryId];
                //exit;
                ?>
                </label>
<!-- INPUT PRODUCT NAME TEXT  --> 
                <label>
                    <span >Product Name</span>
                    <input class="inputfld"  name="invname" type="text" 
                        <?php if(isset($invName)){echo "value='$invName'";} ?>
                        required>
                </label> 
<!-- INPUT DESCRIPTION TEXTAREA    -->                 
                <label>
                    <span >Product Description</span>                             
                </label>
                <label>
                    <textarea name="invdescription" class="inputfld" rows="10" cols="50" 
                        required><?php if(isset($invDescription)){echo $invDescription;} ?></textarea>
                </label>
<!-- INPUT IMAGE TEXT    -->                                     
                <label>
                    <span >Product Image</span>
                    <input class="inputfld"  name="invimage" type="text" 
                        <?php if(isset($invImage)){echo "value='$invImage'";} ?>
                        required >
                </label>
<!-- INPUT THUMBNAIL TEXT    -->                     
                <label>
                    <span >Product Thumbnail</span>
                    <input class="inputfld"  name="invthumbnail" type="text" 
                        <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";} ?>
                        required >
                </label>
<!-- INPUT PRICE TEXT    -->                     
                <label>
                    <span >Product Price</span>
                    <input class="inputfld"  name="invprice" type="text" placeholder="9,999.99"
                           pattern="\d+(\.\d{2})?"
                        <?php if(isset($invPrice)){echo "value='$invPrice'";} ?>
                        required>
                </label>
<!-- INPUT STOCK TEXT   -->                     
                <label>
                    <span >Product Stock</span>
                    <input class="inputfld"  name="invstock" type="text" 
                        <?php if(isset($invStock)){echo "value='$invStock'";} ?>
                        required >
                </label>
<!-- INPUT SIZE TEXT     -->                     
                <label>
                    <span >Product Size</span>
                    <input class="inputfld"  name="invsize" type="text" 
                        <?php if(isset($invSize)){echo "value='$invSize'";} ?>
                        required>
                </label>
<!-- INPUT WEIGHT TEXT     -->                     
                <label>
                    <span >Product Weight</span>
                    <input class="inputfld"  name="invweight" type="text" 
                        <?php if(isset($invWeight)){echo "value='$invWeight'";} ?>
                        required>
                </label>
<!-- INPUT LOCATION TEXT     -->                     
                <label>
                    <span >Product Location</span>
                    <input class="inputfld"  name="invlocation" type="text" 
                        <?php if(isset($invLocation)){echo "value='$invLocation'";} ?>
                        required>
                </label>  
<!-- INPUT VENDOR TEXT     -->                 
                <label>
                    <span >Product Vendor</span>
                    <input class="inputfld"  name="invvendor" type="text" 
                        <?php if(isset($invVendor)){echo "value='$invVendor'";} ?>
                        required>
                </label>
<!-- INPUT STYLE TEXT     -->                 
                <label>
                    <span >Product Style</span>
                    <input class="inputfld"  name="invstyle" type="text" 
                        <?php if(isset($invStyle)){echo "value='$invStyle'";} ?>
                        required>
                </label>
<!-- INPUT BLANK     -->                 
                <label>
                </label>  
<!-- INSERT NEW PRODUCT     -->                 
                <label>   
                    <input type="submit" value="Add Product" class="submit" >
                    <!--Add the action key - value pair-->
                    <input type="hidden" name="action" value="insertproduct">
                </label> 
            </form>
        </div>    
    </main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html><?php
