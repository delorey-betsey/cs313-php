<php session_start();?>

<?php
    $items = $_POST['items'];
    $_SESSION['items'] = $_POST['items'];   
?>
echo here: post items
<?php var_dump($_POST['items']);?> 
<br>
echo here: 1
<?php var_dump($_SESSION['username']); ?>
<br>
echo here: 2
<?php var_dump($_SESSION['items']);?>
<br>
echo here: 3
<?php var_dump($items);?>
<br>

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
