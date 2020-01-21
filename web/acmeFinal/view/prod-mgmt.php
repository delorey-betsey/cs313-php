<?php
if (($_SESSION['loggedin']) and  (($_SESSION['clientData']['clientLevel']) > 1))
    { } else {
    header('location:/acme/index.php');
    exit;
    }
if (isset($_SESSION['message'])) {
 $message = $_SESSION['message'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACME PRODUCT MANAGEMENT BD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/acme/css/style.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>

<body>
    <!-- COMMENT:  header  -->   
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
    <!-- COMMENT:  nav     -->
    <nav>
        <?php echo $navList; ?>
    </nav>
<!-- COMMENT:  main   FORM FOR EMAIL AND PASSWORD  --> 
<main>
    <div class="mainAdmin">
    <div class="textAdmin">
        <div class="mainAdmin2">Product Management</div>
        <div id="description-display">Welcome to the product management page.  
            <br>Please choose an option below:
        </div>
        <br>
        <?php
            if (isset($message)) {
             echo $message;
            }?>
            <p id="description-display">
                <a class="updtlink" href="/acme/products/index.php?action=addcat" 
                   title="Add Category">Add a New Category</a></p>
            <br>
            <p id="description-display">
                <a class="updtlink" href="/acme/products/index.php?action=addprod" 
                   title="Add Product">Add a New Product</a></p>
            <br>
        <?php
            if (isset($message)) {
                 
            } if (isset($prodList)) {
                echo $prodList;
            }
        ?>
    </div>
    </div>
</main>
    <!-- COMMENT:  footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
</body>
</html>
<?php unset($_SESSION['message']); ?>
