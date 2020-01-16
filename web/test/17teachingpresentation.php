<!DOCTYPE html>
<html>
    <head>
        <title>Teaching Presentation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  flexbox header     -->   
<header><div>    
<!-- COMMENT:   sub-logo  -->
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div> Teaching Presentation</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">
        <h1 style="text-align:center;">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>
</div></aside>


<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
<div class="teachingpresentation">
    <h1 style="text-indent:20%">TEACHING PRESENTATION</h1>
    <div class="ul">   
    <ul class="ul li" style="padding-left:30%">        
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

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>