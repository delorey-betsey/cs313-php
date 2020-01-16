<!DOCTYPE html>
<html>
    <head>
        <title>Personas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage  -->
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
    <div>Personas</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:  left sidebar nav  -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>
</div></aside>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT:  section 1 left  -->
    <div class="siteplan">
        <h1>PERSONAS</h1>
        <img src="16siteplan/persona1.JPG" alt="owner" style="padding-left:10%"><br><br>
        <img src="16siteplan/persona2.JPG" alt="consultant" style="padding-left:10%"><br><br>
        <img src="16siteplan/persona3.JPG" alt="contractor" style="padding-left:10%"><br><br>
        <img src="16siteplan/persona4.JPG" alt="architect" style="padding-left:10%"><br><br>
    </div>
</div></main>

<!-- COMMENT:   footer  in sidebar   -->
</body>
</html>