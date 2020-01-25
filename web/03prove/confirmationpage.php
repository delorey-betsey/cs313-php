
<php session_start();?>

<?php $_SESSION['username'] = 'betsey';?>

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
    <!-- TEMPLATE  --> 
        
    <!-- COMMENT:  flexbox header     -->   
    <?php include 'common/header.php'; ?>


    <!-- COMMENT:  flexbox nav     -->  
    <?php include 'common/nav.php'; ?>


    <!-- COMMENT:  flexbox main     -->  

    username:
    <?php var_dump($_SESSION['username']);?>
    
    <?php include 'common/main4confirm.php'; ?>

        <!-- COMMENT:  flexbox nav     -->  
        <?php include 'common/nav.php'; ?>


    <!-- COMMENT:  flexbox footer     --> 
    <?php include 'common/footer.php'; ?>


</body>
</html>

</body>
</html>