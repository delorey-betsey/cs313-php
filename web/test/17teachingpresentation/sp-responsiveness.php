<!DOCTYPE html>
<html>
    <head>
        <title>Responsiveness</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  webpage  -->
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
    <div>Responsiveness</div>
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
<!-- COMMENT: section 1 left   -->
    <div class="siteplan">
        <h1>RESPONSIVENESS</h1>
        <P>(Adaptability of the design to laptop, tablet, smartphone devices.)</P>
        <P>The layout of the laptop and the tablet are essentially the same.  There will be more negative space on the laptop so the design can resize effectively to the smaller tablet screens.  
        </P>
        <table class="table td">
        <col style="width:20%">
        <col style="width:80%">   
            <tr>
                <td>Laptop:</td>
                <td><P><img src="16siteplan/browserwindow.jpg" alt="browserwindow" style="padding-top:5%"></P><br><br></td>
            </tr>
            <tr>
                <td>IPad:</td>
                <td><P><img src="16siteplan/ipad.jpg" alt="ipad" style="padding-top:5%"></P><br><br></td>
            </tr>
            <tr>
                <td>Smartphone:</td>
                <td><P><img src="16siteplan/smartphone.jpg" alt="smartphone" style="padding-top:5%"></P><br><br></td>
            </tr>
        </table>
    </div>
</div></main>

<!-- COMMENT:   footer  in sidebar   -->
</body>
</html>