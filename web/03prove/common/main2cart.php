<php session_start();?>

<?php
    $items = $_POST['items'];
    $_SESSION['items'] = $_POST['items'];   
?>
<?php echo $_SESSION['username']; ?>

<main>
    <div>
        <!-- FIRST DIV--COMMENT:  My Cart title     -->
        <div class="main1" >
            <?php include 'modules/titlecart.php'; ?>            
        </div>
        echo here: $items
        <?php echo $_SESSION['username']; 
              echo $_SESSION['items'];
              echo $items;
              ?>

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
