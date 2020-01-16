<!DOCTYPE html>
<html>
    <head>
        <title>Customization</title>
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
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  top navigation links   -->
    <!-- COMMENT: top nav  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div> 
    
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
    <div class="info">
        <h2 style="text-align:left;">CUSTOMIZED SERVICES<br> TO MEET YOUR PROJECT GOALS</h2>
        <P style="padding-left:20%"><br>What are your project specifications?</p>
        <P style="padding-left:30%">Let's talk…</P>
        <P style="padding-left:30%">We will consider:</P>
        <P style="padding-left:40%">* Public or private (extensive P3 experience)</P> 
        <P style="padding-left:40%">* Large or small</P>  
        <P style="padding-left:40%">* Complex or simple</P>  
        <P style="padding-left:40%">* Scope and scale </P> 
        <P style="padding-left:40%">* Team configuration and dynamics</P>
        <P style="padding-left:40%">* Legal parameters</P>
        <P style="padding-left:40%">* Funding sources and structure </P>
        <P style="padding-left:40%">* Your particular concerns </P>
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