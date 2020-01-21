<?php

/* 
 * Accounts model
 */

//Insert site visitor data to database
function regClient($clientFirstname, $clientLastname, 
                    $clientEmail, $clientPassword){
//Create a connection object using the acme connection function
$db = acmeConnect(); 
//The SQL statement to be used with the database
$sql = 'INSERT INTO clients '
        . '(clientFirstname, clientLastname, clientEmail, clientPassword) '
        . 'VALUES (:firstname, :lastname, :email, :password)';
//The next line creates the prepared statement using the acme connection
$stmt = $db->prepare($sql);
//The next four lines replace the placeholders in the SQL
//statement with the actual values in the variables
//and tells the database the type of data it is 
$stmt->bindValue(':firstname',  $clientFirstname,   PDO::PARAM_STR);
$stmt->bindValue(':lastname',   $clientLastname,    PDO::PARAM_STR);
$stmt->bindValue(':email',      $clientEmail,       PDO::PARAM_STR);
$stmt->bindValue(':password',   $clientPassword,    PDO::PARAM_STR);
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