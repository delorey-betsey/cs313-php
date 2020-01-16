<!DOCTYPE html>
<html>
    <head>
        <title>Customization</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  flexbox header     -->   
<header><div>
<!-- COMMENT:  sub-logo     -->
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div>Customization</div>
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
<!-- COMMENT:  top navigation links   -->
    <!-- COMMENT: top nav  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div> 
    
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
    <div class="info">
        <h1 style="text-align:left;">CUSTOMIZED SERVICES TO MEET YOUR PROJECT GOALS</h1>
        <P style="padding-left:20%">What are your project specifications?</p>
        <P style="padding-left:30%">Let's talk…</P>
        <P style="padding-left:30%">We will consider:</P>
        <P style="padding-left:40%">* Public vs. private</P> 
        <P style="padding-left:40%">* Large vs. small</P>  
        <P style="padding-left:40%">* Simple vs. complex</P>  
        <P style="padding-left:40%">* Regulations by state </P> 
        <P style="padding-left:40%">* Funding sources</P>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>