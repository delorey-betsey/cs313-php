<?php
/* 
 * Functions for presentation of subqueries in statements:
 * SELECT
 * UPDATE
 * DELETE
 */
/* 
 * SELECT * from inventory table as baseline 
 * for SELECT w subquery
 * Using function from Week 9
 */
function subqProductBasics() {
 $db = acmeConnect();
 $sql = 'SELECT * FROM inventory ORDER BY invId ASC';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $subqProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $subqProducts;
}
/* 
 * SELECT * with subquery on categories 
 * for categoryId < 3
 */
function subqSelect() {
 $db = acmeConnect();
 $sql = 'SELECT * '
         . 'FROM inventory '
         . 'WHERE categoryId IN'
            . '(SELECT categoryId '
                . 'FROM categories '
                . 'WHERE categoryID < 3) '
         . 'ORDER BY invId ASC';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $subqSelect = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $subqSelect;
}
/* 
 * UPDATE
 */
/* 
 * UPDATE invStock where categoryId >4
 */
function subqUpdate() {
 $db = acmeConnect();
 $sql = "UPDATE inventory "
         . "SET invStock = invStock * 2 "
         . "WHERE categoryId IN "
            . '(SELECT categoryId '
                . 'FROM categories '
                . 'WHERE categoryID > 4) '
         . "ORDER BY invId ASC";
 $stmt = $db->prepare($sql);
 $stmt->execute();
// echo row-count success
echo $stmt->rowCount() 
    . " records UPDATED successfully";
echo '<br>';
$stmt->closeCursor();}
/* UPDATE results query */
function updateResults() {
 $db = acmeConnect();
 $sql = 'SELECT * '
         . 'FROM inventory '
         . 'ORDER BY categoryId DESC';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $updateResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $updateResults;
}
/* 
 * DELETE
 */
/* 
 * DELETE FROM inventory where 
 * categoryId on categories table <5
 */
function subqDelete() {
 $db = acmeConnect();
 $sql = "DELETE FROM inventory "
         . "WHERE categoryId IN "
            . '(SELECT categoryId '
                . 'FROM categories '
                . 'WHERE categoryId <5)';
 $stmt = $db->prepare($sql);
 $stmt->execute();
// echo row-count success
echo $stmt->rowCount() 
    . " records DELETED successfully";
echo '<br>';
$stmt->closeCursor();}
/* DELETE results query */
function deleteResults() {
 $db = acmeConnect();
 $sql = 'SELECT * '
         . 'FROM inventory '
         . 'ORDER BY categoryId DESC';
 $stmt = $db->prepare($sql);
 $stmt->execute();
 $deleteResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $deleteResults;
}