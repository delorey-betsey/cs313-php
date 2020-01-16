<!DOCTYPE html>
<html>
    <head>
        <title>Sample Style Sheet</title>
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
    <div style="color:#FFCD00">Sample Style Sheet</div>
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
    <h1 style="text-indent:400px">CSS SAMPLE STYLE SHEET</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p>NOTE!</p>
            <p>You can set a <strong>default font</strong> like cursive or sans-serif if the one you want isn't available.
            <br></p><p><strong>Hex values</strong> for colors always start with a pound sign (#), are up to six "digits" long, and are case-insensitive.
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/samplecss.JPG" alt="declarations"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>