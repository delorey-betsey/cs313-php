<!DOCTYPE html>
<html>
    <head>
        <title>Teaching Presentation</title>
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

<div class="row">
<!-- COMMENT:   left sidebar nav -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?> 
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
<div class="teachingpresentation">
    <h2>TEACHING PRESENTATION</h2>
    <div class="ul">   
    <ul style="padding-left:20%">        
        <li ><a href="tp-02cssstandsfor.php">Cascading Style Sheets</a></li> 
        <li ><a href="tp-03linkexternal.php">Link External Style Sheets</a></li>
        <li ><a href="tp-04cssboxmodel.php">CSS Box Model</a></li>
        <li ><a href="tp-05cascading.php">Cascading Rules</a></li>
        <li ><a href="tp-06selectors.php">Selectors</a></li>
        <li ><a href="tp-07inheritance.php">Inheritance</a></li>
        <li ><a href="tp-08cssformattingstds.php">Formatting Standards</a></li>
        <li ><a href="tp-09sectioncomments.php">Section Comments</a></li>
        <li ><a href="tp-10declarations.php">Declarations</a></li>
        <li ><a href="tp-11cssproperties1.php">Properties</a></li>
        <li ><a href="tp-11cssproperties2.php">More Properties</a></li>
        <li ><a href="tp-13samplestylesheet.php">Sample CSS Style Sheet</a></li>        
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