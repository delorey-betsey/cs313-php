<?php
session_start();
$username = $_SESSION["username"];
$items = $_POST['items'];
$_SESSION["items"] = $items;
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
vardump here post items:
<?php var_dump($_POST['items']);?>
<br>
vardump here items:
<?php var_dump($items);?>
<br>
vardump here session items:
<?php var_dump($_SESSION['items']);?>

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