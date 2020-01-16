<!DOCTYPE html>
<html>
    <head>
        <title>Link External</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT: begin webpage   -->
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
    <div>Link External Style Sheet</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:   left sidebar nav -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?> 
    </div>
</div></aside>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT:  section 1 left  -->
<div class="teachingpresentation">
    <h1>HOW TO LINK EXTERNAL STYLE SHEET</h1>
<table class="table td">
    <col style="width:40%">
    <col style="width:60%">
    <tr>
        <td style="align:center"> The <strong> &lt;link&gt; </strong> element can be used to tell the browser where to find the CSS file used to style the page.  It should use the following three elements:
            <br><br>
            <ul>
                <li>A <strong>type</strong> attribute that should always be equal to "text/css"
                <br><br></li> 
                <li>A <strong>rel</strong> attribute that should always be equal to "stylesheet"
                <br><br></li>
                <li>A <strong>href</strong> attribute that should point to the web address of your CSS file
                <br><br></li>
            </ul>
        </td>
        <td><P><img src="17teachingpresentation/linkexternal.JPG" alt="link external"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>