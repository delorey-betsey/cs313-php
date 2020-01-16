<!DOCTYPE html>
<html>
    <head>
        <title>Section Comments</title>
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
    <div">Section Comments</div>
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
    <h1>SECTION COMMENTS</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p><strong>Group</strong> sections by section comments.  
            <br></p><p><strong>Separate</strong> sections with new lines.
            <br></p><p>Write <strong>comments</strong> as you go along. They will help remind you why you did something a certain way (or will help someone else out if they're reading your code without you there to explain it).
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/sectioncomments.JPG" alt="link external"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer  in sidebar  -->
</body>
</html>