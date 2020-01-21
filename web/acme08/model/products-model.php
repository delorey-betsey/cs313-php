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
    //Create a connection object from the acme connection function
    $db = acmeConnect();

    //The SQL statement to be used with the database
    $sql = 'SELECT categoryId, categoryName FROM categories ORDER BY categoryName ASC';

    //The next line creates the prepared statement using the acme connection
    $stmt = $db->prepare($sql);

    //The next line runs the prepared statement
    $stmt->execute();

    //The next line gets the data from the database and 
    //stores it as an array in the $categories variable
    $categoryids = $stmt->fetchALL();

    //The next line closes the interaction with the database
    $stmt->closeCursor();

    //The next line sends the array of data back to where the function
    //was called (this should be the controller)
//var_dump($categoryids);
//exit;
    return $categoryids;
    }
//==============================================================================
//==============================================================================
//Insert new category into categories table
function addCategory($newcatName){
//Create a connection object using the acme connection function
$db = acmeConnect(); 
//The SQL statement to be used with the database
$sql = 'INSERT INTO categories '
        . '(categoryName) '
        . 'VALUES (:categoryName)';
//The next line creates the prepared statement using the acme connection
$stmt = $db->prepare($sql);
//The next four lines replace the placeholders in the SQL
//statement with the actual values in the variables
//and tells the database the type of data it is 
$stmt->bindValue(':categoryName',  $newcatName,   PDO::PARAM_STR);

//echo $categoryName;
//exit;
//Use the prepared statement to insert the data
$stmt->execute();
//Now we find out if the insert worked
//by asking how many rows changed in the table
$categoryAdded = $stmt->rowCount();
//Close the database interaction
$stmt->closeCursor();
//Return the indication of success
return $categoryAdded;
}
//==============================================================================
//==============================================================================    
//Insert new product into inventory table
function addProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle){
//Create a connection object using the acme connection function
$db = acmeConnect(); 
//The SQL statement to be used with the database
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
//The next line creates the prepared statement using the acme connection
$stmt = $db->prepare($sql);
//The next four lines replace the placeholders in the SQL
//statement with the actual values in the variables
//and tells the database the type of data it is 
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

//echo "name=           $invName <br>";	
//echo "description=    $invDescription <br>";
//echo "image=          $invImage <br>";
//echo "thumbnail=      $invThumbnail <br>";	
//echo "price=          $invPrice <br>";
//echo "stock=          $invStock <br>";	
//echo "size=           $invSize <br>";
//echo "weight=         $invWeight <br>";	
//echo "location=       $invLocation <br>";
//echo "categoryId=     $categoryId <br>";
//echo "vendor=         $invVendor <br>";	
//echo "style=          $invStyle <br><br>";
//exit;
//echo "name            :invName <br>";	
//echo "description=    :invDescription <br>";
//echo "image=          :invImage <br>";
//echo "thumbnail=      :invThumbnail <br>";	
//echo "price=          :invPrice <br>";
//echo "stock=          :invStock <br>";	
//echo "size=           :invSize <br>";
//echo "weight=         :invWeight <br>";	
//echo "location=       :invLocation <br>";
//echo "categoryId=     :categoryId <br>";
//echo "vendor=         :invVendor <br>";	
//echo "style=          :invStyle <br>";
//echo $stmt;
//exit;

//Use the prepared statement to insert the data
$stmt->execute();
//Now we find out if the insert worked
//by asking how many rows changed in the table
$rowsChanged = $stmt->rowCount();

//Close the database interaction
$stmt->closeCursor();
//Return the indication of success
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
// echo $prodInfo;
// exit;
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