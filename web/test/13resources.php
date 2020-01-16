<!DOCTYPE html>
<html>
    <head>
        <title>Resources</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  flexbox header     -->   
<header><div>
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div>Free Resources</div>
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
    
<!-- COMMENT:  body section   -->
    <div class="info"  >
        <h1 style="text-align:left">KEEP READING AND SEE FOR YOURSELF.</h1>
        <h3 style="text-align:left">We're into a new era of construction project management.</h3>
        <h3 style="text-align:left">Be sure YOU leverage the efficiencies on your next project.</h3>
        <UL style="padding-left:20%">
            <LI>WIDMIR Project Portfolio</LI>
            <LI>K chapter (link)</LI>
            <LI>Articles (links)</LI>
            <LI>Podcasts(links)</LI>
            <LI>Interviews(links)</LI>
            <LI>Webinars(links)</LI>
            <LI>blogs (links)</LI>
            <LI>Books (links)</LI>
            <LI>Glossary</LI>
            <LI>Press release</LI>
        </UL>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>