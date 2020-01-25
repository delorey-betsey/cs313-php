<?php
session_start();
$items = $_POST['items'];
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


