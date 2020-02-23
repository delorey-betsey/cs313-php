<?php
session_start();
if(!isset($_SESSION['selections'])){
    $items = $_SESSION['selections'];
    }
?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Cart     -->
        <div class="main1title" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>

        <form class="formdiv" method="post" action="cartpage.php">
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
                            }
                        }
                ?>
        </form>
        <br><br><br>
    </div>
</main>