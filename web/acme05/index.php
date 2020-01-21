<?php
/* 
 * Acme Controller
 */
//Get the database connection file
    require_once 'library/connections.php';
//Get the database functions file
    require_once 'library/functions.php';
//Get the acme model for use as needed
    require_once 'model/acme-model.php';

//Get the array of categories
    $categories = getCategories();
//var_dump($categories);
//exit;

//Get the array of categories
    $navList = buildNav($categories);

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
          $action = filter_input(INPUT_GET, 'action');
    }

    switch ($action){
        case 'something':
            break;
        default:
            include 'view/home.php';
    }






