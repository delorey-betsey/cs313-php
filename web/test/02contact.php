<!DOCTYPE html>
<html>
    <head>
        <title>Contact Me</title><meta charset="UTF-8">
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
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: top nav  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div> 

<!-- COMMENT: sections  -->
<!-- COMMENT: section 1 left  -->
    <div class="info">
        <h1 style="text-align:left;"><a href="02contact/contactformindex.php">Contact Form</a></h1>
        <P>I would be happy to discuss the general requirements of your project in a free consultation.
        </P>
        <P>This meeting, either by phone or in person at your choice, comes with no further obligations. It would be helpful to know your project size and timeframe when you contact me.  I can usually respond to inquiries within 24 hours. 
Thank you for your interest.  In my experience, client satisfaction with these new collaborative project delivery systems always meets, but mostly exceeds, client expectations.  Let’s see if together we can help you knock one out of the park, too! 
        </P>
        <P>Kevin A. Delorey </P>
        <P>123 West Washington Ave.</P> 
        <P>Madison WI  53703 </P>
        <P>920-285-1630 </P>
        <P>KAD@con-collab.com </P><br><br>
        
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