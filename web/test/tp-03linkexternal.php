<!DOCTYPE html>
<html>
    <head>
        <title>Link External</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT: begin webpage   -->
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
<!-- COMMENT: body sections   -->
<!-- COMMENT:  section 1 left  -->
<div class="teachingpresentation">
    <h2>HOW TO LINK EXTERNAL STYLE SHEET</h2>
<table class="table td" style="border:3px solid #363204">
    <col style="width:40%">
    <col style="width:60%">
    <tr>
        <td style="align:center"> The <strong> &lt;link&gt; </strong> element can be used to tell the browser where to find the CSS file used to style the page.  It should use the following three elements:
            <br><br>
            <ul>
                <li>A <strong>type</strong> attribute that should always be equal to "text/css"
                <br><br></li> 
                <li>A <strong>rel</strong> attribute that should always be equal to "stylesheet"
                <br><br></li>
                <li>A <strong>href</strong> attribute that should point to the web address of your CSS file
                <br><br></li>
            </ul>
        </td>
        <td><P><img src="17teachingpresentation/linkexternal.JPG" alt="link external" style="height:100%;width=90%;"></P><br><br>    
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