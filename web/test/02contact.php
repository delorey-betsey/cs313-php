<!DOCTYPE html>
<html>
    <head>
        <title>Contact Me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage  -->
<body>

    <!-- COMMENT:  flexbox header     -->   
<header><div>
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div> Contact Me</div>
</div>
</div></header>
    
<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">
        <h1 style="text-align:center;">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>
</div></aside>

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
        <P>KAD@Quarles.com </P><br><br>
        
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>