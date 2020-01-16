<!DOCTYPE html>
<html>
    <head>
        <title>Navigation</title>
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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="siteplan">
        <h2>NAVIGATION</h2>
        <P>(Location, size, behavior, appearance, effects.)</P>
        <P>The site navigation will have four components.  All four components will be displayed consistently on every page.
        </P>
        <UL>
            <LI>The banner will feature the company logo and company name:  Construction Collaboratory.  The logo will all serve as a homepage button. 
            </LI>
            <LI>There will be a navigation menu on the left-hand sidebar.  Five main headings will be displayed which reveal 12 subheadings when hovered over.
            </LI>
            <LI>There will be three menu tabs across the top of the page to emphasize the main informational content pages.
            </LI>
            <LI>There will be a homepage button centered at the bottom of the page.
            </LI>
        </UL>
        <img src="16siteplan/navigation.JPG" alt="navigation"><br><br>
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