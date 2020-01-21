<?php
if (isset($_SESSION['message'])) {
 $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>

    <head        
        <title>IMAGE MGMT</title>
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
    <div class="formdiv" >
        <h1>Image Management</h1>
        <label>Welcome! Please choose an option below.</label>
        <br>
        <h2>Add New Product Image</h2>
        <?php
        if (isset($message)) {
        echo $message;
        }
        ?>
        <form action="/acme/uploads/" method="post" enctype="multipart/form-data">
            <label for="invItem">Product</label>
            <br>
            <?php echo $prodSelect; ?>
            <br>
            <label>Upload Image:</label>
            <br><br>
            <input type="file" name="file1" >
            <br><br>
            <input type="submit" class="submit" value="Upload">
            <input type="hidden" name="action" value="upload">
        </form>
        <hr>
        <br>
        <h2>Existing Images</h2>
            <?php
            if (isset($imageDisplay)) {
             echo $imageDisplay;
            }
            ?>
        <label>If deleting an image, delete the thumbnail, too.</label>
        <label>If deleting an thumbnail, delete the image, too.</label>

    </div>
    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>

<?php unset($_SESSION['message']); ?>