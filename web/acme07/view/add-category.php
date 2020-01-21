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
        <title>ACME ADD CATEGORY BD</title>
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
            <h1>Add Category</h1>
            <h3>Add a new category of products below.
            </h3>
 
            <?php
                if (isset($message)) {                    
                    echo $message;}?>
            
            <form action="/acme/products/index.php" method="post" name="addcat">
<!-- INPUT NEW CATEGORY NAME     -->
                <label>
                    <span >New Category Name</span>
                    <input class="inputfld"  name="newcatName" type="text"  
                           placeholder="category" required>
                </label> 
<!-- INPUT BLANK     -->
                <label>
                </label>  
<!-- INSERT NEW CATEGORY     -->                
                <label>   
                    <input type="submit" value="Add Category" class="submit" >
                    <!--Add the action key - value pair-->
                    <input type="hidden" name="action" value="insertcategory">
                </label> 
            </form>
        </div>    
    </main>

    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html><?php




