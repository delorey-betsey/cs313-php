<?php
$number = $_POST['number'];
$street = $_POST['street'];
$city   = $_POST['city'];
$state  = $_POST['state'];
$zip    = $_POST['zip'];
?>

<body>
        <!-- format return results -->
        <h2>Ship to:</h2>
        <p>Number:    <?php echo $number;?></p> 
        <p>Street:    <?php echo $street;?></p>       
        <p>City:      <?php echo $city;?></p>
        <p>State:     <?php echo $state;?></p>        
        <p>Zip:       <?php echo $zip;?></p>
     
</body>
