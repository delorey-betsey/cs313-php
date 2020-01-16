<!DOCTYPE html>
<html>
    <head>
        <title>Declarations</title>
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
    <div>Declarations</div>
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
    <h1>DECLARATIONS</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p>A <strong>property</strong> is an aspect of a selector. You can change the font-family, color, and font-size of the text on your web pages (in addition to many more).
            <br></p><p><strong>A value</strong> is a possible setting for a property. Color can be red, blue, black, or almost any color; font-family can be a whole bunch of different fonts; and so on.
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/declarations.JPG" alt="declarations"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer  in sidebar  -->
</body>
</html>