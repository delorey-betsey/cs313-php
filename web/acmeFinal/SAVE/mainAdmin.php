<?php
$level = $_SESSION['clientData']['clientLevel'];
?>

<main class="mainAdmin">

<!-- logged in user first and last names    -->
    <div class='mainAdmin1'>
        <?php 
            echo $_SESSION['clientData']['clientFirstname'];
            echo ' ';
            echo $_SESSION['clientData']['clientLastname'];
        ?>
    </div>
        
<!-- display 4 user clientData fields>-->
    <div class="textAdmin" >
        <ul>
            <li>First name: 
                <?php 
                    echo '&nbsp' . '&nbsp' . '&nbsp' . $_SESSION['clientData']['clientFirstname'];
                ?>
            </li>
            <li>Last name: 
                <?php 
                    echo '&nbsp' . '&nbsp' . '&nbsp' . $_SESSION['clientData']['clientLastname'];
                ?>                    
            </li>
            <li>Email: 
                <?php 
                    echo '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' .
                         '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' .
                         '&nbsp' . '&nbsp' . $_SESSION['clientData']['clientEmail'];
                ?>                    
            </li>
            <li>User level: 
                <?php 
                    echo '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . 
                        $_SESSION['clientData']['clientLevel'];
                ?>                    
            </li>
        </ul>
    </div>

<!-- <div products/index.php link if clientLevel = 3... 
if user level is greater than 1 point to product controller via a link in paragraph tag
>-->
    <div class="prodhdg" >
        <?php if($level > 1){
            echo "<p><a href='/acme/products/index.php' title='Product Management'>Products</a></p>";
            }?>
    </div>
</main>
