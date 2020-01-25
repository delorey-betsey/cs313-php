<?php
    $items = $_SESSION['items'];

    $number = $_POST['number'];
    $street = $_POST['street'];
    $city   = $_POST['city'];
    $state  = $_POST['state'];
    $zip    = $_POST['zip'];
?>

<main>
<?php echo $_SESSION['username']; ?>

    <div>
        <!-- FIRST DIV--COMMENT:  Confirmation     -->
        <div class="main1" >
            <?php include 'modules/titleconfirm.php'; ?>            
        </div>
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
        <h2>Items in cart:</h2> 
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
                        echo "<br />";
                        echo "<br />";
                        }
                    }
            ?>
</div>
</main>


