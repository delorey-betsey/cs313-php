<?php

/* 
 * Accounts model
 * 
 * function regClient--insert visitor data to client table
 * function checkExistingEmail--check if email already exists on client table
 * function getClient--get client data based on email address
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
//Create function to check if email already exists in the clients table
function checkExistingEmail($clientEmail) {
  $db = acmeConnect();
  $sql = 'SELECT clientEmail FROM clients WHERE clientEmail = :email';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
  $stmt->execute();
  $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
  $stmt->closeCursor();
  if(empty($matchEmail)){
    return 0;
      //echo 'Nothing there';
      //exit;
  } else {
    return 1;
      //echo 'Match found';
      //exit;
  }
}

//Get client data based on an email address
function getClient($email) {
    $db = acmeConnect();
    $sql = 'SELECT clientId, clientFirstname, clientLastname, clientEmail, clientLevel, clientPassword '
            . 'FROM clients '
            . 'WHERE clientEmail = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
}
