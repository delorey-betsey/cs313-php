<?php
    $var = $_SESSION['username'];  
    echo $var;   
?>

<body> 

       
    <!-- COMMENT:  flexbox header and nav    -->   
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
   

    <!-- COMMENT:  flexbox main     -->  
    <?php include 'common/main2cart.php'; ?>


    <!-- COMMENT:  flexbox bottom nav and footer  -->  
    <?php include 'common/nav.php'; ?>
    <?php include 'common/footer.php'; ?>

</body>
