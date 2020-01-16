<!DOCTYPE html>
<html>
    <head>
        <title>Responsiveness</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT:  webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT:  left sidebar nav  -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="siteplan">
        <h2>RESPONSIVENESS</h2>
        <P>(Adaptability of the design to laptop, tablet, smartphone devices.)</P>
        <P>The layout of the laptop and the tablet are essentially the same.  There will be more negative space on the laptop so the design can resize effectively to the smaller tablet screens.  
        </P>
        <p>Designs for laptop, tablet and smartphone below:</p>
        <P><img src="16siteplan/browserwindow.jpg" alt="browserwindow" style="padding-top:3%;padding-bottom:5%"></P>
        <P><img src="16siteplan/ipad.jpg" alt="ipad" style="padding-bottom:5%"></P>
        <p><img src="16siteplan/smartphone.jpg" alt="smartphone" style="padding-bottom:5%"></P>
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