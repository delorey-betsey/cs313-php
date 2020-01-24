<?php
    $items = $_POST['items'];
?>
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Cart     -->
        <div class="main1" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>

        <form method="post" action="cartpage.php">
            <br><br>
            Items in cart: 
                <?php
                    if(empty($items)) 
                    {
                    echo("You didn't select any items.");
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
    </div>
</main>
