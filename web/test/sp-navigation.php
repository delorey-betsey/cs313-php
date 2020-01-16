<!DOCTYPE html>
<html>
    <head>
        <title>Navigation</title>
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
   <div>Navigation</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT: left sidebar nav   -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>
</div></aside>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  body sections  -->
<!-- COMMENT: section 1 left   -->
    <div class="siteplan">
        <h1>NAVIGATION</h1>
        <P>(Location, size, behavior, appearance, effects.)</P>
        <P>The site navigation will have four components.  All four components will be displayed consistently on every page.
        </P>
        <UL>
            <LI>The banner will feature the company logo and company name:  Construction Collaboratory.  The logo will all serve as a homepage button. 
            </LI>
            <LI>There will be a navigation menu on the left-hand sidebar.  Five main headings will be displayed which reveal 12 subheadings when hovered over.
            </LI>
            <LI>There will be three menu tabs across the top of the page to emphasize the main informational content pages.
            </LI>
            <LI>There will be a homepage button centered at the bottom of the page.
            </LI>
        </UL>
        <img src="16siteplan/navigation.JPG" alt="navigation"><br><br>
    </div>
</div></main>

<!-- COMMENT:   footer  in sidebar   -->
</body>
</html>