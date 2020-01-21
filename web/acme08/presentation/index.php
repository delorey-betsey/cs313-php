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
//Get the functions file
    require_once '../library/functions.php';
//Get the functions file for presentation
    require_once '../library/subqueries.php';
//Get the acme model for use as needed
    require_once '../model/acme-model.php';
//Get the accounts model
    require_once '../model/products-model.php';
//Check if the user data cookies exist, get values
//*******************************************************************
// * SELECT *  * SELECT * * SELECT * * SELECT * * SELECT * * SELECT *
// $productsBasics from Week 9  
//*******************************************************************
////Run SELECT with subquery
//    $subqProducts = subqProductBasics();
//var_dump($subqProducts);
////exit;
////
////Table showing all 16 inventory items
//    echo "<table border='1' style='border-collapse: 
//    collapse;border-color: silver;'>";  
//    echo "<tr style='font-weight: bold;'>";  
//    echo '<th> invId </th> <th> invName </th> <th> categoryId </th> <th> invStock </th> <th> invDescription </th>';
//    
//    echo '<tr>';
//        foreach ($subqProducts as $invId) { 
//            echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
//            echo '<td width="200" align=left>'      . $invId['invName']         . '</td>'; 
//            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';            
//            echo '<td width="200" align=center>'    . $invId['invStyle']        . '</td>';
//            echo '<td width="400" align=left>'      . $invId['invDescription']  . '</td>';
//    echo '</tr>';
//    }  
////*******************************************************************
//// * SELECT *  * SELECT * * SELECT * * SELECT * * SELECT * * SELECT *
//// EXAMPLE SELECT with subquery  
////*******************************************************************
////Run SELECT with subquery
//    $subqSelect = subqSelect();
//var_dump($subqSelect);
////exit;    
////Table showing inventory items with subquery on categories for categoryId < 3
//    echo "<table border='1' style='border-collapse: 
//    collapse;border-color: silver;'>";  
//    echo "<tr style='font-weight: bold;'>";  
//    echo '<th> invId </th> <th> invName </th> <th> categoryId </th> <th> invStock </th> <th> invDescription </th>';
//    
//    echo '<tr>';
//        foreach ($subqSelect as $invId) { 
//            echo '<td width="100" align=center>'    . $invId['invId']           . '</td>';
//            echo '<td width="200" align=left>'      . $invId['invName']         . '</td>'; 
//            echo '<td width="100" align=center>'    . $invId['categoryId']      . '</td>';
//            echo '<td width="200" align=center>'    . $invId['invStyle']        . '</td>';
//            echo '<td width="400" align=left>'      . $invId['invDescription']  . '</td>';
//    echo '</tr>';
//    } 
//    
//exit;
//*******************************************************************
// * UPDATE *  * UPDATE * * SELECT * * UPDATE * * UPDATE * * UPDATE *
// EXAMPLE UPDATE with subquery  
//*******************************************************************
//Run SELECT with subquery
    $subqUpdate = subqUpdate();
var_dump($subqUpdate);
//exit;    
//Table showing inventory items with subquery on categories for categoryId < 3
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
//==============================================================================
//==============================================================================
//echo $action;
//exit; 
    switch ($action){
        //Show add category view
        case 'select':
        
            break;
        //Show add product view
        case 'insert':
        
            break;   
//==============================================================================        
//==============================================================================
//Complete inserting new category to category table
        case 'update':

            break;
//==============================================================================
//==============================================================================        
//Complete inserting new product to inventory table      
        case 'delete':            

            break;
        default:
            include '../view/home.php';
    }