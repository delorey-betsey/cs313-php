<!DOCTYPE html>
<html>
    <head>
        <title>More Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  banner   -->
<div class="homepage" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    What Are My Risks?
</div>

<!-- COMMENT:  body   -->
<div id="body">

<div class="row">
<!-- COMMENT:   left sidebar nav  -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
        <canvas height="500" width="250"></canvas> 
    </div>

<!-- COMMENT:  body sections   -->
<!-- COMMENT:  top nav   -->
    <div class="sub-topnav" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-topnav.php'; ?>
    </div>  

<!-- COMMENT:  section 1 left   -->
    <div class="info"  >
        <h1 style="text-align:center;">WHAT DO I RISK?</h1>
        <h3 style="text-align:center;">Seriously, the biggest risk you can take...<br> is NOT doing your next project with Construction Collaboratory.</h3>
        <UL>
            <LI>In person, contact info form</LI>
            <LI>By phone link, contact info form to schedule call.</LI>
            <LI>Email address and pop up new email form</LI>
            <LI>Request info packet by mail, contact info form</LI>
            <LI>Sign up for newsfeed. Enter email, pop up to join.</LI>
        </UL>
    </div>
</div>
</div>
<!-- COMMENT:  footer     -->
<footer>
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/responsive-footer-nav.php'; ?>
</footer>
</body>
</html>