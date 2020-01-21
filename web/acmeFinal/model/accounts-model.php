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
$stmt = $db->prepare($sql);
$stmt->bindValue(':firstname',  $clientFirstname,   PDO::PARAM_STR);
$stmt->bindValue(':lastname',   $clientLastname,    PDO::PARAM_STR);
$stmt->bindValue(':email',      $clientEmail,       PDO::PARAM_STR);
$stmt->bindValue(':password',   $clientPassword,    PDO::PARAM_STR);
$stmt->execute();
$rowsChanged = $stmt->rowCount();
$stmt->closeCursor();
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
  } else {
    return 1;
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
//Get client data based on an email address
function getClientInfo($clientId) {
    $db = acmeConnect();
    $sql = 'SELECT clientId, clientFirstname, clientLastname, clientEmail, clientLevel, clientPassword '
            . 'FROM clients '
            . 'WHERE clientId = :clientId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':clientId', $clientId, PDO::PARAM_INT);
    $stmt->execute();
    $clientInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientInfo;
}
//Update visitor first, last, email on database
function updtAccount($ciFirstname, $ciLastname, $ciEmail, $ciId){
$db = acmeConnect(); 
$sql = 'UPDATE clients SET clientFirstname = :firstname,
        clientLastname  = :lastname,
        clientEmail     = :email
        WHERE clientId  = :id';
$stmt = $db->prepare($sql);
$stmt->bindValue(':firstname',  $ciFirstname,   PDO::PARAM_STR);
$stmt->bindValue(':lastname',   $ciLastname,    PDO::PARAM_STR);
$stmt->bindValue(':email',      $ciEmail,       PDO::PARAM_STR);
$stmt->bindValue(':id',         $ciId,          PDO::PARAM_INT);
$stmt->execute();
$ciAcctRowChgd = $stmt->rowCount();
$stmt->closeCursor();
return $ciAcctRowChgd;
}
//Update visitor password on database
function updtPassword($ciPassword, $ciId){
$db = acmeConnect(); 
$sql = 'UPDATE clients SET 
        clientPassword  = :password
        WHERE clientId  = :id';
$stmt = $db->prepare($sql);
$stmt->bindValue(':password',   $ciPassword,    PDO::PARAM_STR);
$stmt->bindValue(':id',         $ciId,          PDO::PARAM_INT);
$stmt->execute();
$ciPwordRowChgd = $stmt->rowCount();
$stmt->closeCursor();
return $ciPwordRowChgd;
}
