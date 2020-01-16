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

<div class="row">
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: top nav  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div>

<!-- COMMENT:  body sections   -->
<!-- COMMENT:   section 1 left  -->
 
    <div class="info"  > 
           <h1>KEVIN A. DELOREY</h1>
        <table>
        <col style="width:30%">
        <col style="width:70%">
            <tr>
                <td>
                <div class="moviewrapper" >
                <video style="height: 70%; width: 70%;" controls>
                    <source src="01intro/kadvideo1.mp4" type="video/mp4">
                    <source src="01intro/kadvideo1.mp4" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                </div>
                </td>
                <td>
                    <p>Kevin has practiced real estate and construction law since 1986.  He handles all aspects of commercial real estate development, such as purchase and sale; finance; annexation, eminent domain and land use and zoning approval; subdivision and condominium documentation and approval; design and construction contract negotiation and drafting,including integrated project delivery ("IPD") contracts, contracts associated with building information modeling ("BIM") and lean construction.
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <img src="01intro/kbdisneysq.jpg" alt="Kevin Delorey and wife" style="padding-top:5%; padding-left:5%;">
                </td>
                <td>
                    <img src="01intro/10miler60sq.jpg" alt="Kevin Delorey and grandkids" style="padding-top:5%; padding-left:5%;">
                </td>
                <td>
                    <img src="01intro/disneygrandkidssq.jpg" alt="Kevin Delorey and grandkids" style="padding-top:5%; padding-left:5%;">
                </td>
            </tr>
        </table>  
    </div>  
</div></main>
</div>

<!-- COMMENT:  footer     -->
<footer>
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/responsive-footer-nav.php'; ?>
</footer>

</div>
</body>
</html>