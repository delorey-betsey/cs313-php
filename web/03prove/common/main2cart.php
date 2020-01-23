<?php
$username = $_POST['username'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$major = $_POST['major'];
$continents = $_POST['continents'];
?>

<form method="post" action="cartpage.php">

    <br><br>

    <input type="checkbox" name="items[]"    value="item1">Item 1<br>
    <input type="checkbox" name="items[]"    value="item2">Item 2<br>
    <input type="checkbox" name="items[]"    value="item3">Item 3<br>
    <input type="checkbox" name="items[]"    value="item4">Item 4<br>

    <br><br>

    <input type="submit">

</form>
