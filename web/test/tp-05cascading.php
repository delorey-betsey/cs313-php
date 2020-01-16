<!DOCTYPE html>
<html>
    <head>
        <title>Cascading Rules</title>
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
    <div>Cascading Rules</div>
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
    <h1>CASCADING RULES</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p>We say these style sheets are <strong>cascading</strong> because the sheets can apply formatting when more than one style applies.
            <br></p><p>For instance, if you say all paragraphs should have blue font, but you specifically single out one paragraph to have red font, CSS can do that! 
            <br></p><p>If there are two or more rules that apply to the same element, it is important to understand which will take precedence.
                <br></p><p>You can add <strong>!important </strong> after any property value to indicate that is should be considered more important than other rules that apply to the same element.
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/cascadingrules.JPG" alt="link external"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>