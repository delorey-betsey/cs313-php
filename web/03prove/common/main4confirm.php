<?php
session_start();
$items = $_SESSION["items"];
$username = $_SESSION["username"];
$number = $_POST['number'];
$street = $_POST['street'];
$city   = $_POST['city'];
$state  = $_POST['state'];
$zip    = $_POST['zip'];
?>

echo here username:
<?php echo $username; ?>
<br>
echo here session username:
<?php echo $_SESSION['username']; ?>
<br>
vardump here session username:
<?php var_dump($_SESSION['username']); ?>
<br>
vardump here items:
<?php var_dump($items);?>
<br>
vardump here session items:
<?php var_dump($_SESSION['items']);?>


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
        <br><br><br>    
    </div>
    <br><br>
        Items in cart: 
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
                    echo("Sale complete: $N items(s): THANK YOU! ");
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


