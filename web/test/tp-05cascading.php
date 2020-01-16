<!DOCTYPE html>
<html>
    <head>
        <title>Cascading Rules</title>
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
    <h2>CASCADING RULES</h2>

<table class="table td" style="border:3px solid #363204">
    <col style="width:40%">
    <col style="width:60%">
    <tr>
        <td style="align:center">
            <p>We say these style sheets are <strong>cascading</strong> because the sheets can apply formatting when more than one style applies.
            <br></p><p>For instance, if you say all paragraphs should have blue font, but you specifically single out one paragraph to have red font, CSS can do that! 
            <br></p><p>If there are two or more rules that apply to the same element, it is important to understand which will take precedence.
                <br></p><p>You can add <strong>!important </strong> after any property value to indicate that is should be considered more important than other rules that apply to the same element.
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/cascadingrules.JPG" alt="link external" style="height:100%;width=90%;"></P><br><br>    
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