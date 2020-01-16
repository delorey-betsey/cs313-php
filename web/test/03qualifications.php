<!DOCTYPE html>
<html>
    <head>
        <title>Qualifications</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="stylesheet.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>

<!-- COMMENT:  begin webpage -->
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
<!-- COMMENT: top navigation links  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div> 

<!-- COMMENT: body sections  -->
<!-- COMMENT: section 1 left  -->
    <div class="info"  >
        <h1>QUALIFICATIONS</h1>
        <P>Kevin Delorey's practice includes all aspects of commercial real estate development, including purchase and sale; finance; annexation, eminent domain and land use and zoning approval; subdivision and condominium documentation and approval; design and construction contract negotiation and drafting, including integrated project delivery ("IPD") contracts, contracts associated with building information modeling ("BIM") and lean construction. His recent experience includes:
        </P>
        <ul>
            <li>Assembly of multiple real estate parcels, zoning and land use approvals, and negotiation and drafting of one of the country's first integrated project delivery contracts for development, design and construction of a $200 million public/private bio-medical research facility.
            <br><br></li>
            <li>Assembly of multiple real estate parcels needed for the development and construction of a $200 million cultural arts and entertainment facility.
            <br><br></li>
            <li>Acquisition of a 300+ acre site for a new corporate headquarters. Project also involved annexation, and negotiation and drafting of design and construction contracts for the $100 million first phase of development.
            <br><br></li>
            <li>Creation of a number of single-asset entities, and the subsequent purchase of commercial real estate by those entities, including a central-city office tower and several shopping center properties.
            <br><br></li>
            <li>Representation of numerous school districts in the purchase, development and construction of school-related facilities.
            <br><br></li>
            <li>Creation of a public/private partnership for the purpose of developing a combination competition swimming pool and family aquatic center.
            <br><br></li>
            <li>Representation of numerous health care clients in the development, design, and construction of new hospital and medical office building facilities.
        </ul>
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