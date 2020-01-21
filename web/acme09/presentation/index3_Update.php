<?php
/* 
 * Presentation Controller
 * 
 *  * Switch cases to deliver views to demonstrate subqueries: 
 *      SELECT
 *      INSERT
 *      UPDATE
 *      DELETE
 */

//Get or create session
session_start();

//Get the database connection file
    require_once '../library/connections.php';
//Get the presentation functions file
    require_once '../library/subqueries.php';
 
//*******************************************************************
// * UPDATE *  * UPDATE * * UPDATE * * UPDATE * * UPDATE * * UPDATE *
// Example function UPDATE with subquery  
//*******************************************************************
//Run UPDATE with subquery
    $updateResults = subqUpdate();

    //*******************************************************************
// * UPDATE *  * UPDATE * * UPDATE * * UPDATE * * UPDATE * * UPDATE *
// Run SELECT on inventory table to display results  
//*******************************************************************
//Run SELECT for results from UPDATE with subquery
    $updateResults = updateResults();

//*******************************************************************
// * UPDATE *  * UPDATE * * UPDATE * * UPDATE * * UPDATE * * UPDATE *
// Display UPDATE results table  
// Table showing inventory items with subquery on categories for categoryId < 3
//*******************************************************************
    echo '<br>';
    echo 'Results after UPDATE with subquery restricting updates<br>on invStock '
    . 'to items w categoryIds >4';
    echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";
    echo '<th> invId </th> <th> invName </th> <th> categoryId </th> <th> invStock </th> <th> invDescription </th>';
    
    echo '<tr>';
        foreach ($updateResults as $invId) { 
            echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
            echo '<td width="200" align=left>'      . $invId['invName']         . '</td>';             
            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';
            echo '<td width="100" align=left>'      . $invId['invStock']        . '</td>'; 
            echo '<td width="400" align=left>'      . $invId['invDescription']  . '</td>';
    echo '</tr>';
    } 
    
exit;

