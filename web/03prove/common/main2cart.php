<?php
    $items = $_POST['items'];
?>

<form method="post" action="cartpage.php">

    <br><br>

    Items in cart: 

        <?php
                if(empty($items)) 
                {
                echo("You didn't select any continents.");
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
	</body>

</form>
