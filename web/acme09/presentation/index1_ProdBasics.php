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
// $productsBasics from Week 9  
//*******************************************************************
//Run SELECT with subquery
    $subqProducts = subqProductBasics();
    
    var_dump($subqProducts);
//exit;
//
//Table showing all 16 inventory items
    echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";  
    echo '<th> invId </th> <th> invName </th> <th> categoryId </th> <th> invStock </th> <th> invDescription </th>';
    
    echo '<tr>';
        foreach ($subqProducts as $invId) { 
            echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
            echo '<td width="200" align=left>'      . $invId['invName']         . '</td>'; 
            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';            
            echo '<td width="200" align=center>'    . $invId['invStyle']        . '</td>';
            echo '<td width="400" align=left>'      . $invId['invDescription']  . '</td>';
    echo '</tr>';
    }  

