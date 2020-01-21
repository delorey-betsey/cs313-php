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
//Check if the user data cookies exist, get values

//*******************************************************************
// * SELECT *  * SELECT * * SELECT * * SELECT * * SELECT * * SELECT *
// EXAMPLE SELECT with subquery  
//*******************************************************************
//Run SELECT with subquery
    $subqSelect = subqSelect();
//var_dump($subqSelect);
//exit;    
//
//Table showing inventory items with subquery on categories for categoryId < 3
        echo '<br>';
    echo 'Results after SELECT with subquery restricting<br> selection '
    . 'to items w categoryIds < 3';
    echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";  
    echo '<th> invId </th> <th> invName </th> <th> categoryId </th> <th> invStock </th> <th> invDescription </th>';
    
    echo '<tr>';
        foreach ($subqSelect as $invId) { 
            echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
            echo '<td width="200" align=left>'      . $invId['invName']         . '</td>'; 
            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';
            echo '<td width="200" align=center>'    . $invId['invStyle']        . '</td>';
            echo '<td width="400" align=left>'      . $invId['invDescription']  . '</td>';
    echo '</tr>';
    } 
    
exit;

