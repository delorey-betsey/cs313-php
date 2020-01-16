<!DOCTYPE html>
<html>
    <head>
        <title>Inheritance</title>
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
    <h1>INHERITANCE</h1>
<table class="table td" style="border:3px solid #363204">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p>Some properties like font-family or color properties can be specified in the <strong>&lt;body&gt; </strong>element and they will <strong>apply to most child elements.</strong>  This is called inheritance.  
            <br></p><p>For instance, if you say all paragraphs should have blue font, but you specifically single out one paragraph to have red font, CSS can do that! 
            <br></p><p>Some properties are inherited by child elements through the html.  Background-color is a property that is <strong>NOT</strong> inherited through the whole program.
            <br></p><p>You can force a lot of properties to <strong>inherit values</strong> from the parent elements by using inherit for the value of the properties. 
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/inheritance.JPG" alt="link external"></P><br><br>    
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