<?php
    $items = $_POST['items'];
    $_SESSION['items'] = $_POST['items'];   
?>
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Cart     -->
        <div class="main1" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>

        <a  href="<?php echo 'homepage.php'; ?>" title="Browse" >Browse</a>
        <a  href="<?php echo 'checkoutpage.php'; ?>" title="Checkout" >Checkout</a>

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
