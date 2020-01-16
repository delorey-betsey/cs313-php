<!DOCTYPE html>
<html>
    <head>
        <title>Formatting Standards</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage  -->
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
    <div>Formatting Standards</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT: left sidebar nav   -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?>
    </div>
</div></aside>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="teachingpresentation">
        <h1>FORMATTING STANDARDS</h1>
        <h2>(Suggestions from our old pal Google)</h2>
        <ul>
            <li><strong>Alphabetize</strong> <u>declarations.</u></li>
            <li><strong>Indent</strong> all <u>block content.</u></li>
            <li>Use a <strong>semicolon</strong> <u>after every declaration.</u></li>
            <li>Use a <strong>space</strong> <u>after a property name’s colon.</u></li>
            <li><u>Separate selectors and declarations</u> by <strong>new lines.</strong></li>
            <li><u>Separate rules</u> by <strong>new lines.</strong></li>
            <li>Use <strong>single quotation marks</strong> for <u>attribute selectors and property values.</u></li>
        </ul>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar -->
</body>
</html>