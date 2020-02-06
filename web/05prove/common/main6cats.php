<?php
echo 'entering main6cats';
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT a.artid, a.brief, a.price, a.thumb, a.fullsize u.displayname 
FROM art a JOIN userarfs u ON a.artist = u.userid 
WHERE a.title = :title');
$stmt->bindValue(':title', 'cat', PDO::PARAM_str);
$stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump ($cats);
?>

