<?php
/* 
 * Products Controller
 * 
 * Database connections files: connections, acme-model, products-model.php's
 * Create $navList
 * Create $catList
 * Filter-input: name-value pairs
 * Switch cases to deliver views: 
 *      newcat>>   view/new-cat.php
 *      newprod>>  view/newprod.php
 *      add-cat>>  insert into categories->products/index.php (w new category in nav bar)
 *      add-prod>> inset into inventory->view/prod-mgmt.php (w success message)
 *  Return data check error messages
 *  Return success or failure messages to view from which the data was sent
 */

//Get or create session
session_start();

//Get the database connection file
    require_once '../library/connections.php';
//Get the functions file
    require_once '../library/functions.php';
//Get the acme model for use as needed
    require_once '../model/acme-model.php';
//Get the accounts model
    require_once '../model/products-model.php';
//Check if the user data cookies exist, get values
   
//Get the array of categories
    $categories = getCategories();
//var_dump($categories);
//exit;

//Build a navigation bar using the $categories array
    $navList = buildNav($categories);
//var_dump($navList);
//exit;    
//Get the array of categoryids for add category drop-down list
    $categoryids = getCategoryids();
//var_dump($categoryids);
//exit;
//==============================================================================
//==============================================================================
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
//echo $action;
//exit;
//==============================================================================
//==============================================================================
//echo $action;
//exit; 
    switch ($action){
        //Show add category view
        case 'addcat':
            include '../view/add-category.php';
            break;
        //Show add product view
        case 'addprod':
            include '../view/add-product.php';
            break;   
//==============================================================================        
//==============================================================================
//Complete inserting new category to category table
        case 'insertcategory':
//Filter and store the data
            $newcatName	= filter_input(INPUT_POST,'newcatName', FILTER_SANITIZE_STRING);
            //Check for missing data
            if (empty($newcatName)) 
                {
                $message = '<p>Please provide new category name in the form field.'
                        . '</p>';
                include '../view/add-category.php';
                exit;
                }
        //=====================================================================        
        //Send the data to the model
            $categoryAdded = addCategory($newcatName);
        //Check and report the result
            if ($categoryAdded === 1) {
                $message = "<p>Congratulations, $categoryName was successfully added.</p>";
                header('location:/acme/products/index.php');
                exit;
            } else {
                $message = "<p>Sorry, but your request to add a new category failed."
                        . ".  Please try again.</p>";
                include '../view/add-category.php';
                exit;
            }
            break;
//==============================================================================
//==============================================================================        
//Complete inserting new product to inventory table      
        case 'insertproduct':
        //Filter and store the data
            $invName        = filter_input(INPUT_POST,'invname', FILTER_SANITIZE_STRING);
            $invDescription = filter_input(INPUT_POST,'invdescription', FILTER_SANITIZE_STRING);
            $invImage       = filter_input(INPUT_POST,'invimage', FILTER_SANITIZE_STRING);
            $invThumbnail   = filter_input(INPUT_POST,'invthumbnail', FILTER_SANITIZE_STRING);
            $invPrice       = filter_input(INPUT_POST,'invprice', FILTER_SANITIZE_STRING);
            $invStock       = filter_input(INPUT_POST,'invstock', FILTER_SANITIZE_STRING);
            $invSize        = filter_input(INPUT_POST,'invsize', FILTER_SANITIZE_STRING);
            $invWeight      = filter_input(INPUT_POST,'invweight', FILTER_SANITIZE_STRING);
            $invLocation    = filter_input(INPUT_POST,'invlocation', FILTER_SANITIZE_STRING);
            $categoryId     = filter_input(INPUT_POST,'categoryId', FILTER_SANITIZE_STRING);
            $invVendor      = filter_input(INPUT_POST,'invvendor', FILTER_SANITIZE_STRING);
            $invStyle       = filter_input(INPUT_POST,'invstyle', FILTER_SANITIZE_STRING); 
            //Check for missing data
            if (empty($invName) || 
                empty($invDescription) || 
                empty($invImage) || 
                empty($invThumbnail) || 
                empty($invPrice) ||
                empty($invStock) || 
                empty($invSize) || 
                empty($invWeight) ||
                empty($invLocation) || 
                empty($categoryId) ||
                empty($invVendor) ||
                empty($invStyle)) 
                {
                $message = '<p>Please provide information for all empty form fields.'
                        . '</p>';
                include '../view/add-product.php';
                exit;
            }
            
            //=================================================================        
            //Send the data to the model
            $productAdded = addProduct($invName,	
                                    $invDescription,
                                    $invImage,
                                    $invThumbnail,	
                                    $invPrice,
                                    $invStock,	
                                    $invSize,	
                                    $invWeight,	
                                    $invLocation,
                                    $categoryId,
                                    $invVendor,	
                                    $invStyle);
            //Check and report the result
            if ($productAdded === 1) {
                $message = "<p>Congratulations, $invName was successfully added.</p>";
                unset($invName);	
                unset($invDescription);
                unset($invImage);
                unset($invThumbnail);	
                unset($invPrice);
                unset($invStock);	
                unset($invSize);	
                unset($invWeight);	
                unset($invLocation);
                unset($categoryId);
                unset($invVendor);	
                unset($invStyle);
                include '../view/prod-mgmt.php';
                exit;
            } else {
                $message = "<p>Sorry, but your request to add product failed."
                        . ".  Please try again.</p>";
                include '../view/add-product.php';
                exit;
            }
            break;
//Request to modify product
        case 'mod':
            $invId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            $prodInfo = getProductInfo($invId);
             if(count($prodInfo)<1){
                $message = 'Sorry, no product information could be found.';
                }
            include '../view/product-update.php';
            exit;            
        break;
//Complete inserting new product to inventory table
        case 'updateprod':
        //Filter and store the data
            $invName        = filter_input(INPUT_POST,'invname', FILTER_SANITIZE_STRING);
            $invDescription = filter_input(INPUT_POST,'invdescription', FILTER_SANITIZE_STRING);
            $invImage       = filter_input(INPUT_POST,'invimage', FILTER_SANITIZE_STRING);
            $invThumbnail   = filter_input(INPUT_POST,'invthumbnail', FILTER_SANITIZE_STRING);
            $invPrice       = filter_input(INPUT_POST,'invprice', FILTER_SANITIZE_STRING);
            $invStock       = filter_input(INPUT_POST,'invstock', FILTER_SANITIZE_STRING);
            $invSize        = filter_input(INPUT_POST,'invsize', FILTER_SANITIZE_STRING);
            $invWeight      = filter_input(INPUT_POST,'invweight', FILTER_SANITIZE_STRING);
            $invLocation    = filter_input(INPUT_POST,'invlocation', FILTER_SANITIZE_STRING);
            $categoryId     = filter_input(INPUT_POST,'categoryId', FILTER_SANITIZE_STRING);
            $invVendor      = filter_input(INPUT_POST,'invvendor', FILTER_SANITIZE_STRING);
            $invStyle       = filter_input(INPUT_POST,'invstyle', FILTER_SANITIZE_STRING); 
            $invId          = filter_input(INPUT_POST,'invId', FILTER_SANITIZE_NUMBER_INT);
            //Check for missing data
            if (empty($invName) || 
                empty($invDescription) || 
                empty($invImage) || 
                empty($invThumbnail) || 
                empty($invPrice) ||
                empty($invStock) || 
                empty($invSize) || 
                empty($invWeight) ||
                empty($invLocation) || 
                empty($categoryId) ||
                empty($invVendor) ||
                empty($invStyle)) 
                {     
                $message = '<p>Please provide information for all empty form fields.'
                        . ' Double check the category of the item.</p>';
                include '../view/product-update.php';
                exit;
            }
            //=================================================================        
            //Send the data to the model
            $updateResult = updateProduct($invName,	
                                    $invDescription,
                                    $invImage,
                                    $invThumbnail,	
                                    $invPrice,
                                    $invStock,	
                                    $invSize,	
                                    $invWeight,	
                                    $invLocation,
                                    $categoryId,
                                    $invVendor,	
                                    $invStyle,
                                    $invId);
//echo $productAdded;
//exit;
            //Check and report the result
            if ($updateResult) {
                $message = "<p>Congratulations, $invName was successfully updated.</p>";
                $_SESSION['message'] = $message;
                header('location: /acme/products/');
                exit;
            } else {
                $message = "<p>Sorry, but your request to update $invName failed."
                        . ".  Please try again.</p>";
                include '../view/product-update.php';
                exit;
            }
            break;
//Set up delete confirmation on product-delete view 
        case 'del':
            $invId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            $prodInfo = getProductInfo($invId);
            if(count($prodInfo)<1){
                $message = 'Sorry, no product information could be found.';
                }
            include '../view/product-delete.php';
            exit;            
        break; 
//Complete delete of single item from inventory table
        case 'deleteprod':
        //Filter and store the data
            $invId    = filter_input(INPUT_POST,'invid', FILTER_SANITIZE_NUMBER_INT);
            $invName  = filter_input(INPUT_POST,'invname', FILTER_SANITIZE_STRING);
            //=================================================================        
            //Send the data to the model
            $deleteResult = deleteProduct($invId);
            //Check and report the result
            if ($deleteResult) {
                $message = "<p>Congratulations, $invName was successfully deleted.</p>";
                $_SESSION['message'] = $message;
                header('location: /acme/products/');
                exit;
            } else {
                $message = "<p>Error: $invName was not deleted..</p>";
                $_SESSION['message'] = $message;
                header('location: /acme/products/');
                exit;
            }
            break;            
        default:
            $products = getProductBasics();
            if(count($products) > 0){
                $prodList = '<table>';
                $prodList .= '<thead>';
                $prodList .= '<tr><th>Product Name</th><th>Modify</th><th>Delete</th></tr>';
                $prodList .= '</thead>';
                $prodList .= '<tbody>';
                foreach ($products as $product) {
                    $prodList .= "<tr><td>$product[invName]</td>";
                    $prodList .= "<td><a href='/acme/products?action=mod&id=$product[invId]' "
                            . "title='Click to modify'>Modify</a></td>";
                    $prodList .= "<td><a href='/acme/products?action=del&id=$product[invId]' "
                             . "title='Click to delete'>Delete</a></td></tr>";
                    }
                $prodList .= '</tbody></table>';
                } else {
                    $message = '<p class="notify">Sorry, no products were returned.</p>';
                }
            include '../view/prod-mgmt.php';
            break;
    }