<?php
/* 
 * This is the Acme Model
 */
function getCategories(){
    
    $db = acmeConnect();

    $sql = 'SELECT categoryName FROM categories ORDER BY categoryName ASC';

    $stmt = $db->prepare($sql);

    $stmt->execute();

    $categories = $stmt->fetchALL();

    $stmt->closeCursor();
    return $categories;
    }
