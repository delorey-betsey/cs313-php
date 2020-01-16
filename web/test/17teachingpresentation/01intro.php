<!DOCTYPE html>
<html>
    <head>
        <title>Kevin Delorey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="stylesheet.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>

<!-- COMMENT:   begin webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">
        <h1 style="text-align:center">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

<!-- COMMENT:  body sections   -->
<!-- COMMENT:   section 1 left  -->
    <div class="info"  >
        <div class="moviewrapper">
            <video controls>
                <source src="01intro/kadpitch24.mov" type="video/mp4">
                <source src="01intro/kadpitch24.mov" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <h1 style="text-align:left">KEVIN A. DELOREY</h1>  
        <div ><br>Kevin has practiced real estate and construction law since 1986.  He handles all aspects of commercial real estate development, such as purchase and sale; finance; annexation, eminent domain and land use and zoning approval; subdivision and condominium documentation and approval; design and construction contract negotiation and drafting,including integrated project delivery ("IPD") contracts, contracts associated with building information modeling ("BIM") and lean construction.
        <br>
        </div>
        <table>
        <col style="width:50%">
        <col style="width:50%">
        <col style="width:50%">
            <tr>
                 <td>
                    <img src="01intro/disneygrandkids.jpg" alt="Kevin Delorey and grandkids">
                </td>
                <td>
                    <img src="01intro/kbdisney.jpg" alt="Kevin Delorey and wife">
                </td>
                <td>
                    <img src="01intro/10miler60.jpg" alt="Kevin Delorey and grandkids">
                </td>
                
            </tr>
        </table>  
    </div>
 
<!-- COMMENT:  footer in sidebar  -->
<footer>
	
</footer>
</div>
</body>
</html>