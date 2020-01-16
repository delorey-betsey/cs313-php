<!DOCTYPE html>
<html>
    <head>
        <title>Site Plan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>
 
<!-- COMMENT:  flexbox header     -->   
<header><div>
<!-- COMMENT:   sub-logo  -->
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div> Site Plan</div>
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
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
<div class="siteplan">
    <h1 style="text-indent:20%">SITE PLAN</h1>
    <div class="ul">    
    <ul style="padding-left:30%">        
        <li ><a href="sp-sitepurpose.php"> Site Purpose</a></li>
        <li style="padding-left: 5%"> 
            <a href="sp-elevatorpitch.php">Elevator Pitch</a></li>
        <li style="padding-left: 5%">
            <a href="sp-personas.php">Personas</a></li>
        <li style="padding-left: 5%">
            <a href="sp-scenarios.php">Scenarios</a></li>
        <li ><a href="sp-assetlist.php">Asset List</a></li>
        <li ><a href="sp-sitemap.php">Site Map</a></li>
        <li ><a href="sp-colorscheme.php">Color Scheme</a></li>
        <li ><a href="sp-typography.php">Typography</a></li>
        <li ><a href="sp-navigation.php">Navigation</a></li>
        <li ><a href="sp-responsiveness.php">Responsiveness</a></li>
    </ul> 
    </div>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>