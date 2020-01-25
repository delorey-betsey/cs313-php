
<php session_start();?>

<br>
echo username
<?php echo $_SESSION['username']; ?>
<br>
echo here: 1
<?php var_dump($_SESSION['username']); ?>
<br>
echo here: 2
<?php var_dump($_SESSION['items']);?>
<br>
echo here: 3
<?php var_dump($items);?>

<!DOCTYPE html>
<html>
    <head>
        <title>ARFs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo|Dosis" rel="stylesheet">
    </head>

<body>

    <!-- COMMENT:  flexbox header and nav    -->   
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>


    <!-- COMMENT:  flexbox main     -->  
    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->

    
    <?php echo $_SESSION['username']; ?>
    
    <?php include 'common/main3checkout.php'; ?>


    <!-- COMMENT:  flexbox bottom nav and footer  -->  
    <?php include 'common/nav.php'; ?>
    <?php include 'common/footer.php'; ?>

</body>
</html>

</body>
</html>