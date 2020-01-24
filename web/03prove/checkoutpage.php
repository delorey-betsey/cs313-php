<?php
    $var = $_SESSION['username'];  
    echo $var;   
?>

<body> 

    <!-- COMMENT:  flexbox header and nav    -->   
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>

    
    <!-- COMMENT:  flexbox main     -->  
    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->
    <?php include 'common/main3checkout.php'; ?>


    <!-- COMMENT:  flexbox bottom nav and footer  -->  
    <?php include 'common/nav.php'; ?>
    <?php include 'common/footer.php'; ?>

</body>
