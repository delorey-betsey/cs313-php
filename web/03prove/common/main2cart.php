<?php
    $items = $_SESSION['selections'];  
?>
<main>
    <div>
        <!-- FIRST DIV--COMMENT:  Cart     -->
        <div class="main1" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>

        <?php echo $SESSION['username'];?>
        
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
                            setcookie('selections_array[$i]', 'value' , time()+3600);
                            echo "<br />";
                            echo "<br />";
                            }
                        }
                ?>
        </form>
        <br><br><br>
    </div>
</main>
