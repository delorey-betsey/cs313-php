<!DOCTYPE html>
<html>
    <head>
        <title>test Construction-Collaboratory.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:   This website is intended for publication when my husband retires, likely 2019.    -->
<!-- COMMENT:  body begin webpage     -->
<body>
    
<!-- COMMENT:  flexbox header     -->   
<header><div>
<!-- COMMENT:  logo     -->
<div class="logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/logo.php'; ?>
</div>
<!-- COMMENT:  banner     -->
<div class="banner" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/banner.php'; ?>
</div>
</div></header>

<!-- COMMENT:  flexbox nav     -->  
<nav><div>
<!-- COMMENT:  top navigation links    -->
<div class="nav1links" >
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div>
<div>
</div></nav>

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
      <!-- COMMENT:  top nav     -->
    <div class="nav2images" >
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav2images.php'; ?>
    </div>

<!-- COMMENT:  main question     -->
    <div class="question" >
        <strong>What's the difference?</strong>
    </div>

<!-- COMMENT:   section 1 left    -->
    <div class="infoleft"  >
        <h1 style="text-align:center;">Traditional Methods</h1>
        <ul>
            <li> Lack of communication leads to lack of trust.</li>
            <li> Failure to document decisions leads to disputes.</li>
            <li> Unrealistic expectations create unwelcome surprises.</li>
        </ul>
    </div>

<!-- COMMENT:  section 2 right     -->
    <div class="inforight" >
        <h1 style="text-align:center;">Today's <br>Project Management</h1>
        <ul>
            <li> Involve key participants early to gain benefit of expertise. </li>
            <li> Use of latest technologies to increase efficiency and decrease errors.</li>
            <li> Shared risk/shared reward to motivate parties to collaborate.</li>    
        </ul>
    </div>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar     -->
</body>
</html>
