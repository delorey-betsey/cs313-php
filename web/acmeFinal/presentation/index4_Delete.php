<?php
/* 
 * Presentation Controller
 * 
 *  * Switch cases to deliver views to demonstrate subqueries: 
 *      DELETE
 */

//Get or create session
session_start();

//Get the database connection file
    require_once '../library/connections.php';
//Get the presentation functions file
    require_once '../library/subqueries.php';
 
//*******************************************************************
// * DELETE *  * DELETE * * DELETE * * DELETE * * DELETE * * DELETE *
// Example function DELETE with subquery  
//*******************************************************************
//Run DELETE with subquery
    $deleteResults = subqDelete();

    //*******************************************************************
// * DELETE *  * DELETE * * DELETE * * DELETE * * DELETE * * DELETE *
// Run SELECT on inventory table to display results  
//*******************************************************************
//Run SELECT for results from DELETE with subquery
    $deleteResults = deleteResults();

//*******************************************************************
// * DELETE *  * DELETE * * DELETE * * DELETE * * DELETE * * DELETE *
// Display DELETE results table  
// Table showing one item deleted with 
// Vendor Nobel Enterprises and stock < 100
//*******************************************************************
    echo '<br>';
    echo 'Results after DELETE with subquery restricting<br>'
    . ' DELETE to items with categoryId <5';
    echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";
    echo '<th> invName </th> <th> invId </th> <th> categoryId </th> <th> invVendor </th> ';
    
    echo '<tr>';
        foreach ($deleteResults as $invId) {             
            echo '<td width="100" align=left>'      . $invId['invName']        . '</td>';                echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';
            echo '<td width="100" align=left>'      . $invId['invVendor']        . '</td>'; 
    echo '</tr>';
    } 
    
exit;

