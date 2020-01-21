<?php

/* 
 * This is the Products model
 * 
 * New function getCategoryids to request categoryId array from database
 * New function addCategory for inserting new category into categories table
 * New function addProduct for inserting new product into inventory table
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
