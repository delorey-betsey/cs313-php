<!DOCTYPE html>
<html>
    <head>
        <title>Box Model</title>
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
    <div>Box Model</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:  left sidebar nav  -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?>
    </div>
</div></aside>


<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="teachingpresentation">
        <h1>BOX MODEL</h1>
    <table class="table td">
        <col style="width:25%">
        <col style="width:75%">
        <tr>
            <td style="align:center"> 
                CSS treats each html element like it appears inside its own box and uses rules to indicate how that element should look.
            </td>
            <td><P><img src="17teachingpresentation/boxmodel.png" alt="box model"></P><br><br>    
            </td>
        </tr>
    </table>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>