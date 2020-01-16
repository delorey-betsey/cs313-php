<!DOCTYPE html>
<html>
    <head>
        <title>Formatting Standards</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT:  begin webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT: left sidebar nav   -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="teachingpresentation">
        <h1>FORMATTING STANDARDS</h1>
        <h2>(Suggestions from our old pal Google)</h2>
        <ul>
            <li><strong>Alphabetize</strong> <u>declarations.</u></li>
            <li><strong>Indent</strong> all <u>block content.</u></li>
            <li>Use a <strong>semicolon</strong> <u>after every declaration.</u></li>
            <li>Use a <strong>space</strong> <u>after a property name colon.</u></li>
            <li><u>Separate selectors and declarations</u> by <strong>new lines.</strong></li>
            <li><u>Separate rules</u> by <strong>new lines.</strong></li>
            <li>Use <strong>single quotation marks</strong> for <u>attribute selectors and property values.</u></li>
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