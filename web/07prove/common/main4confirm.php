<?php
session_start();
$number = $_POST['number'];
$street = $_POST['street'];
$city   = $_POST['city'];
$state  = $_POST['state'];
$zip    = $_POST['zip'];
$username = $_SESSION["username"];
$items = $_POST['items'];
if(isset($_SESSION['selections'])){
    $items = $_SESSION['selections'];
    }
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1title" >
            <?php include 'modules/titleconfirm.php'; ?>            
        </div>
        <?php
        if(empty($items)) 
        {
            echo("There are no items in your cart.");
            echo "<br />";
            echo "<br />";
        } 
        ?>
        <!-- format return results -->
        <h2>Ship to:</h2>
        <p>Name:      <?php echo $username;     ?></p>
        <p>Number:    <?php echo $number;       ?></p> 
        <p>Street:    <?php echo $street;       ?></p>       
        <p>City:      <?php echo $city;         ?></p>
        <p>State:     <?php echo $state;        ?></p>        
        <p>Zip:       <?php echo $zip;          ?></p>
    
    </div>
    <br>
    <br> 
    <?php
        if(!empty($items)) 
            echo "<h2>Sale Completed:  THANK YOU ! </h2>";
            {
                $N = count($items);
                echo("$N items(s) Purchased: ");
                echo "<br />";
                for($i=0; $i < $N; $i++)
                    {
                    echo($items[$i] . " ");
                    echo "<br />";
                    }
            }
            echo "<br />";
            echo "<br />";
    ?>
    </div>

<?php
// destroy the session
session_destroy();
?>
</main>


