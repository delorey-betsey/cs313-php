<!DOCTYPE html>
<html>
    <head>
        <title>Lessons</title>
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
    <div>Lessons Learned</div>
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
    <div class="info"  >
        <h1 style="text-align:left;">CUTTING EDGE PROJECT MANAGEMENT</h1>
        <ul>
            <li> Involve key participants early to gain benefit of expertise. </li>
            <li> Use of latest technologies to increase efficiency and decrease errors.</li>
            <li> Shared risk/shared reward to motivate parties to collaborate.</li>    
        </ul>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>