<?php
    $number = $_POST['number'];
    $street = $_POST['street'];
    $city   = $_POST['city'];
    $state  = $_POST['state'];
    $zip    = $_POST['zip'];

    setcookie($cookie_number, $number, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_street, $street, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_city,   $city,   time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_state,  $state,  time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_zip,    $zip,    time() + (86400 * 30), "/"); // 86400 = 1 day

    $items = $_POST['cookie_items'];
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titleconfirm.php'; ?>            
        </div>
        
    <?php echo $SESSION['username'];?>
        
        <!-- format return results -->
        <h2>Ship to:</h2>
        <p>Number:    <?php echo $number;       ?></p> 
        <p>Street:    <?php echo $street;       ?></p>       
        <p>City:      <?php echo $city;         ?></p>
        <p>State:     <?php echo $state;        ?></p>        
        <p>Zip:       <?php echo $zip;          ?></p>
        <br><br><br>    
    </div>
    <br><br>
        Items in cart: 
            <?php
                if(empty($items)) 
                    {
                    echo("You didn't select any items.");
                    echo "<br />";
                    echo "<br />";
                    } 
                else 
                    {
                    $N = count($items);
                    echo("You selected $N items(s): ");
                    echo "<br />";
                    for($i=0; $i < $N; $i++)
                        {
                        echo "<br />";
                        echo($items[$i] . " ");
                        setcookie('selections_array[$i]', 'value' , time()+3600);
                        echo "<br />";
                        echo "<br />";
                        }
                    }
            ?>
</div>
</main>


