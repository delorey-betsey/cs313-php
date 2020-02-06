<?php
echo 'entering main6cats';
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('select a.artid, a.brief, a. title, a.price, a.thumb, a.fullsize, u.displayname from art a join userarfs u on a.artist = u.userid where a.title = :title'); 
$stmt->bindValue(':title', 'cat', PDO::PARAM_str);
$stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump ($cats);
?>

