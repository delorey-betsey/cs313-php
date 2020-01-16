<!DOCTYPE html>
<html>
    <head>
        <title>Site Plan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>

<!-- COMMENT:  begin webpage   -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<!-- COMMENT:  left sidebar nav     -->
<div class="row">
<!-- COMMENT:   left sidebar nav     -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
<div class="siteplan">
    <h2>SITE PLAN</h2>
    <div class="ul">    
    <ul style="padding-left:20%">        
        <li ><a href="sp-sitepurpose.php"> Site Purpose</a></li>
        <li style="padding-left: 5%"> 
            <a href="sp-elevatorpitch.php">Elevator Pitch</a></li>
        <li style="padding-left: 5%">
            <a href="sp-personas.php">Personas</a></li>
        <li style="padding-left: 5%">
            <a href="sp-scenarios.php">Scenarios</a></li>
        <li ><a href="sp-assetlist1.php">Asset List Part 1</a></li>
        <li ><a href="sp-assetlist2.php">Asset List Part 2</a></li>
        <li ><a href="sp-sitemap.php">Site Map</a></li>
        <li ><a href="sp-colorscheme.php">Color Scheme</a></li>
        <li ><a href="sp-typography.php">Typography</a></li>
        <li ><a href="sp-navigation.php">Navigation</a></li>
        <li ><a href="sp-responsiveness.php">Responsiveness</a></li>
    </ul> 
    </div>
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