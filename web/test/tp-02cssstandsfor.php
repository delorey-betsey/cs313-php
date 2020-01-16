<!DOCTYPE html>
<html>
    <head>
        <title>C.S.S.</title>
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
    <div>CSS Stands for Cascading Style Sheets</div>
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
    <h1>CSS STANDS FOR CASCADING STYLE SHEET</h1>
<table class="table td">
    <col style="width:50%">
    <col style="width:50%">
    <tr>
        <td style="align:center">CSS is a language used to <strong>describe the appearance and formatting of your HTML.</strong><br><br>
            Recommended: 
            <ul>
                <li>An HTML file (example.html)</li> 
                <li>and <strong>ONE separate external CSS file.</strong> (example.css)</li>
            </ul>
            <br>
            Place all the styles in one CSS file.
            <br><br>
            This streamlines initial styling and any on-going enhancements.  
            <br><br>
        <em>With a single CSS file, you only have to code your changes in one place!</em>
        </td>
        <td>
            <ul>
                <li>You can apply the same formatting to several HTML elements without rewriting code (e.g.style="color:red":) over and over.
                <br><br></li>
                <li>You can apply similar appearance and formatting to several HTML pages from a single CSS file.
                <br><br></li>
                <li>Once style sheet is loaded, the rest of the site loads faster.
                </li>
            </ul>
        </td>
    </tr>   
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>