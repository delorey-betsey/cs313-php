<?php
session_start();
$items = $_SESSION["items"];
$username = $_SESSION['username'];
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
        <!-- FIRST DIV--COMMENT:  My Cart title     -->
        <div class="main1" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>

        <!-- FIRST DIV--COMMENT:  Cart Contents    -->
        <form method="post" action="cartpage.php">
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
                        echo "<br />";
                        echo "<br />";
                        }
                    }
            ?>
        </form>
        <br><br><br>
    </div>
</main>
