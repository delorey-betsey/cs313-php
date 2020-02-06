<?php
$id = htmlspecialchars($_GET['id']);
require "dbConnect.php";
$db = get_db();
$stmt = $db->prepare('SELECT displayname, bio, pic FROM userarfs WHERE userid = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump ($artists);
?>