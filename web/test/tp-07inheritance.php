<!DOCTYPE html>
<html>
    <head>
        <title>Inheritance</title>
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
   <div>Inheritance</div>
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
    <h1>INHERITANCE</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">
            <p>Some properties like font-family or color properties can be specified in the <strong>&lt;body&gt; </strong>element and they will <strong>apply to most child elements.</strong>  This is called inheritance.  
            <br></p><p>For instance, if you say all paragraphs should have blue font, but you specifically single out one paragraph to have red font, CSS can do that! 
            <br></p><p>Some properties are inherited by child elements through the html.  Background-color is a property that is <strong>NOT</strong> inherited through the whole program.
            <br></p><p>You can force a lot of properties to <strong>inherit values</strong> from the parent elements by using inherit for the value of the properties. 
            <br></p>
        </td>
        <td><P><img src="17teachingpresentation/inheritance.JPG" alt="link external"></P><br><br>    
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>