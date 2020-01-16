<!DOCTYPE html>
<html>
    <head>
        <title>Risks</title>
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
    <div class="info"  >
        <h2 style="text-align:center;">"I'm interested. <br>What are my risks?"</h2>
        <h3 style="text-align:center;">Seriously, the biggest risk you can take...<br><br> is NOT doing your next project with Construction Collaboratory.<br><br></h3>
        <UL>
            <LI>Free initial consultation request form.<br></LI>
            <LI>References from prior clients.<br></LI>
            <LI> Credentials include:<br>
            <ul>
                <li>UW Madison Law School (1986) High Honors</li>
                <li>Martindale Hubble AV Rated</li>
                <li>Best Lawyers in America since 1995</li>
                <li>AGC Lean Construction Certificate</li>
            </ul>
            </LI>
            <LI>Confidentiality<br></LI>
            <li>The success of your project is our primary goal</li>
        </UL>
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