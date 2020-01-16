<!DOCTYPE html>
<html>
    <head>
        <title>Consultations</title>
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
    <div> Consultations</div>
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
<!-- COMMENT:   section 1 left  -->
    <div class="info"  >
        <h1 style="text-align:left;">CONSULTATIONS TAILORED TO YOUR NEEDS AND BUDGET</h1>
        <UL>
            <LI>Typical consultation hours.</LI>
            <LI>On-call availability.</LI>
            <LI>Payment structure.</LI>
        </UL>
    </div>
</div></main>

</body>
</html>