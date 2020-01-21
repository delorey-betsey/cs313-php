<?php

      /* 
 * This is the Reviews model
 * 
 * New function getCategoryids to request categoryId array fromo Insert a review
 * o Get reviews for a specific inventory item
 * o Get reviews written by a specific client
 * o Get a specific review
 * o Update a specific review
 *   o Delete a specific review
 */

//==============================================================================
//==============================================================================
//Insert a new review into reviews table
function insertReview($rText,$rInvId,$rClientId) {
$db = acmeConnect(); 
$sql = 'INSERT INTO reviews (reviewText,invId,clientId) VALUES (:reviewText,:invID,:clientId)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':reviewText',$rText,  PDO::PARAM_STR);  
$stmt->bindValue(':invID',$rInvId,      PDO::PARAM_INT);
$stmt->bindValue(':clientId',$rClientId,PDO::PARAM_INT);     
$stmt->execute();
$reviewInserted = $stmt->rowCount();
$stmt->closeCursor();
return $reviewInserted;
}


//Get reviews for a specific inventory item
function getReviewsByItem($invId)  {
 $db = acmeConnect();
 $sql = 'SELECT *, clients.clientFirstname, clientLastname '
         . 'FROM reviews JOIN clients '
         . 'ON reviews.clientId = clients.clientId '
         . 'WHERE invId = :invId '
         . 'ORDER BY reviewDate DESC';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
 $stmt->execute();
 $itemReviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $itemReviews; 
}


//Get reviews from reviews table by a certain client
function getReviewsByClient($clientid)    {
 $db = acmeConnect();
  $sql = 'SELECT *, inventory.invName '
          . 'FROM reviews JOIN inventory '
          . 'ON reviews.invId = inventory.invId '
          . 'WHERE clientId = :clientId '
          . 'ORDER BY reviewDate DESC';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':clientId', $clientid, PDO::PARAM_INT);
 $stmt->execute();
 $clientReviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $clientReviews; 
}
   

//Get specific review    
function getReviewByReviewId($reviewid){
 $db = acmeConnect();
 $sql = 'SELECT *, inventory.invName '
         . 'FROM reviews JOIN inventory '
         . 'ON reviews.invId = inventory.invId '
         . 'WHERE reviewId = :reviewId';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':reviewId', $reviewid, PDO::PARAM_INT);
 $stmt->execute();
 $reviewInfo = $stmt->fetch(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $reviewInfo; 
}

   
//Update review on reviews table
function updateReview($eReviewId,$eReviewText){
$db = acmeConnect(); 
$sql = 'UPDATE reviews SET reviewText= :reviewText
        WHERE reviewId = :reviewId';
$stmt = $db->prepare($sql);                   
$stmt->bindValue(':reviewId',$eReviewId,PDO::PARAM_INT);
$stmt->bindValue(':reviewText',$eReviewText,PDO::PARAM_STR);
$stmt->execute();
$reviewChanged = $stmt->rowCount();
$stmt->closeCursor();
return $reviewChanged;
}


//Delete review on reviews table
function deleteReview($doReviewId){
$db = acmeConnect(); 
$sql = 'DELETE FROM reviews WHERE reviewId = :reviewId';
$stmt = $db->prepare($sql);
$stmt->bindValue(':reviewId', $doReviewId, PDO::PARAM_INT);
$stmt->execute();
$deleteResult = $stmt->rowCount();
$stmt->closeCursor();
return $deleteResult; 
}       