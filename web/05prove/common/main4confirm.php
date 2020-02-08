<?php
session_start();
$number = $_POST['number'];
$street = $_POST['street'];
$city   = $_POST['city'];
$state  = $_POST['state'];
$zip    = $_POST['zip'];
$username = $_SESSION["username"];
$items = $_POST['items'];
if(!isset($_SESSION['items'])){
    $items = $_POST['items'];
    $_SESSION["items"] = $items;
    }
$items = $_SESSION["items"];
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titleconfirm.php'; ?>            
        </div>
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
        <h2>Sale Completed:  THANK YOU ! </h2>
        <br> 
            <?php
                if(empty($items)) 
                    {
                    echo("There are no items in your cart.");
                    echo "<br />";
                    echo "<br />";
                    } 
                else 
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
            ?>
    </div>
    echo "<br />";
    echo "<br />";
<?php
// destroy the session
session_destroy();
?>
</main>


