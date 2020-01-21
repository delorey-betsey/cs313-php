<?php

/* 
 * This is the Products model
 * 
 * New function getCategoryids to request categoryId array from database
 * New function addCategory for inserting new category into categories table
 * New function addProduct for inserting new product into inventory table
 * New function getProductBasics to get prod info for 1st step update/delete
 * New function getProductInfo for basic product information for single item by invId
 * New function updateProduct to update product on inventory table
 * New function deleteProduct to delete product on inventory table
 * New function getProductsByCategory to get a list of products from inventory 
 *      based on the category
 * New function getItemById($id)to get product info from inventory for one item
 */

//Request categoryId array from database
function getCategoryids(){
    $db = acmeConnect();
    $sql = 'SELECT categoryId, categoryName FROM categories ORDER BY categoryName ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $categoryids = $stmt->fetchALL();
    $stmt->closeCursor();
    return $categoryids;
    }
//==============================================================================
//==============================================================================
//Insert new category into categories table
function addCategory($newcatName){
$db = acmeConnect(); 
$sql = 'INSERT INTO categories '
        . '(categoryName) '
        . 'VALUES (:categoryName)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':categoryName',  $newcatName,   PDO::PARAM_STR);

$stmt->execute();
$categoryAdded = $stmt->rowCount();
$stmt->closeCursor();
return $categoryAdded;
}
//==============================================================================
//==============================================================================    
//Insert new product into inventory table
function addProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle){
$db = acmeConnect(); 
$sql = 'INSERT INTO inventory (invName, 
                                invDescription, 
                                invImage, 
                                invThumbnail, 
                                invPrice, 
                                invStock, 
                                invSize, 
                                invWeight, 
                                invLocation, 
                                categoryId, 
                                invVendor, 
                                invStyle)
        VALUES (:invName, 
                :invDescription, 
                :invImage, 
                :invThumbnail, 
                :invPrice, 
                :invStock, 
                :invSize, 
                :invWeight, 
                :invLocation, 
                :categoryId, 
                :invVendor, 
                :invStyle)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':invName',            $invName,           PDO::PARAM_STR);
$stmt->bindValue(':invDescription',     $invDescription,    PDO::PARAM_STR);
$stmt->bindValue(':invImage',           $invImage,          PDO::PARAM_STR);
$stmt->bindValue(':invThumbnail',       $invThumbnail,      PDO::PARAM_STR);
$stmt->bindValue(':invPrice',           $invPrice,          PDO::PARAM_STR);
$stmt->bindValue(':invStock',           $invStock,          PDO::PARAM_INT);
$stmt->bindValue(':invSize',            $invSize,           PDO::PARAM_INT);
$stmt->bindValue(':invWeight',          $invWeight,         PDO::PARAM_INT);
$stmt->bindValue(':invLocation',        $invLocation,       PDO::PARAM_STR);
$stmt->bindValue(':categoryId',         $categoryId,        PDO::PARAM_INT);
$stmt->bindValue(':invVendor',          $invVendor,         PDO::PARAM_STR);
$stmt->bindValue(':invStyle',           $invStyle,          PDO::PARAM_STR);

$stmt->execute();
$rowsChanged = $stmt->rowCount();
$stmt->closeCursor();
return $rowsChanged;
}
//==============================================================================
//==============================================================================    
//Get basic product information from inventory for starting an update or delete process
function getProductBasics() {
    $db = acmeConnect();
    $sql = 'SELECT invName, invId '
            . 'FROM inventory '
            . 'ORDER BY invName ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $products;
}
//==============================================================================
//==============================================================================    
//Get basic product information for single item by invId
function getProductInfo($invId){
 $db = acmeConnect();
 $sql = 'SELECT * FROM inventory WHERE invId = :invId';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
 $stmt->execute();
 $prodInfo = $stmt->fetch(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $prodInfo;
 
}
//Update product on inventory table
function updateProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle, $invId){
$db = acmeConnect(); 
$sql = 'UPDATE inventory SET invName        = :invName,
            invDescription  = :invDescription, 
            invImage        = :invImage, 
            invThumbnail    = :invThumbnail, 
            invPrice        = :invPrice, 
            invStock        = :invStock, 
            invSize         = :invSize, 
            invWeight       = :invWeight, 
            invLocation     = :invLocation, 
            categoryId      = :categoryId, 
            invVendor       = :invVendor, 
            invStyle        = :invStyle,
            invId           = :invId
        WHERE invId = :invId';
$stmt = $db->prepare($sql);
$stmt->bindValue(':invName',            $invName,           PDO::PARAM_STR);
$stmt->bindValue(':invDescription',     $invDescription,    PDO::PARAM_STR);
$stmt->bindValue(':invImage',           $invImage,          PDO::PARAM_STR);
$stmt->bindValue(':invThumbnail',       $invThumbnail,      PDO::PARAM_STR);
$stmt->bindValue(':invPrice',           $invPrice,          PDO::PARAM_STR);
$stmt->bindValue(':invStock',           $invStock,          PDO::PARAM_INT);
$stmt->bindValue(':invSize',            $invSize,           PDO::PARAM_INT);
$stmt->bindValue(':invWeight',          $invWeight,         PDO::PARAM_INT);
$stmt->bindValue(':invLocation',        $invLocation,       PDO::PARAM_STR);
$stmt->bindValue(':categoryId',         $categoryId,        PDO::PARAM_INT);
$stmt->bindValue(':invVendor',          $invVendor,         PDO::PARAM_STR);
$stmt->bindValue(':invStyle',           $invStyle,          PDO::PARAM_STR);
$stmt->bindValue(':invId',              $invId,             PDO::PARAM_INT);
$stmt->execute();
$rowsChanged = $stmt->rowCount();
$stmt->closeCursor();
return $rowsChanged;
}
//Delete product on inventory table
function deleteProduct($invId){
$db = acmeConnect(); 
$sql = 'DELETE FROM inventory WHERE invId = :invId';
$stmt = $db->prepare($sql);
$stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
$stmt->execute();
$deleteResult = $stmt->rowCount();
$stmt->closeCursor();
return $deleteResult;
}
//Get a list of products from inventory based on the category
function getProductsByCategory($type){
$db = acmeConnect();
$sql = 'SELECT * FROM inventory '
        . 'WHERE categoryId IN '
            . '(SELECT categoryId FROM categories '
            . 'WHERE categoryName = :catType)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':catType', $type, PDO::PARAM_STR);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
return $products;
}
//Get a list of products from inventory based on the category
function getItemById($id){
$db = acmeConnect();
$sql = 'SELECT * FROM inventory WHERE invId = :invId';
$stmt = $db->prepare($sql);
$stmt->bindValue(':invId', $id, PDO::PARAM_INT);
$stmt->execute();
$item = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();
return $item;
}