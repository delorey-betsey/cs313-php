<!DOCTYPE html>
<html>
    <head>
        <title>C.S.S.</title>
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
    <h2>CSS STANDS FOR CASCADING STYLE SHEET</h2>
<table class="table td" style="border:3px solid #363204">
    <col style="width:40%">
    <col style="width:60%">
    <tr>
        <td style="align:center">CSS is a language used to <strong>describe the appearance and formatting of your HTML.</strong><br><br>
            Recommended: 
            <ul>
                <li>An HTML file (example.html)</li> 
                <li>and <strong>ONE separate external CSS file.</strong> (example.css)</li>
            </ul>
            <br>
            Place all the styles in one CSS file.
            <br><br>
            This streamlines initial styling and any on-going enhancements.  
            <br><br>
        <em>With a single CSS file, you only have to code your changes in one place!</em>
        </td>
        <td>
            <ul>
                <li style="list-style-type: none"> </li>
                <li style="list-style-type: none"> </li>
                <li style="list-style-type: none"> </li>
                <li>You can apply the same formatting to several HTML elements without rewriting code (e.g.style="color:red":) over and over.
                <br><br></li>
                <li>You can apply similar appearance and formatting to several HTML pages from a single CSS file.
                <br><br></li>
                <li>Once style sheet is loaded, the rest of the site loads faster.
                </li>
            </ul>
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