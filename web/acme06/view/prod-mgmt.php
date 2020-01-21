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
        <title>ACME PRODUCT MANAGEMENT BD</title>
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

        <!-- COMMENT:  flexbox main   FORM FOR EMAIL AND PASSWORD  --> 
<main>
    <div class="formdiv">
        <h1>Product Management</h1>
        <h3>Welcome to the product management page.  <br>Please choose an option            below:</h3>
        <?php
            if (isset($message)) {
             echo $message;
            }?>
        <a href="/acme/products/index.php?action=addcat" class="prodmgmt"
               title="Add Category">Add a New Category</a>
        <a href="/acme/products/index.php?action=addprod" class="prodmgmt" 
               title="Add Product">Add a New Product</a>
    </div>
</main>

        <!-- COMMENT:  flexbox footer     --> 
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

    </body>
</html>