<!DOCTYPE html>
<html>
    <head>
        <title>Selectors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT:  begin webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT:    -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT: section 1 left   -->
<div class="teachingpresentation">
    <h2>SELECTORS</h2>
    There are many different types of CSS selector that allow you to <strong>target rules to specific elements</strong> in your html document.

<table class="table td" style="border:3px solid #363204">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:60%">
    <tr>
        <td> Universal selector
        </td>
        <td>*{ }
        </td>
        <td>Applies to all elements in the document.
        </td>
    </tr>
    <tr>
        <td> Type selector
        </td>
        <td>h1, h2, h3 { }
        </td>
        <td>Matches element names.
        </td>
    </tr>
    <tr>
        <td>Class selector 
        </td>
        <td>.note {}
        </td>
        <td>Matches an element who class attribute has a value that matches the one specified after the period symbol
        </td>
    </tr>
    <tr>
        <td>ID Selector 
        </td>
        <td>#introduction { }
        </td>
        <td>Matches an element whose id attribute has a value that matches the one specified after the pound or has symbol
        </td>
    </tr>
    <tr>
        <td>Child 
        </td>
        <td>li>a { }
        </td>
        <td>Targets any &lt;a&gt; elements that are children of an &lt;li&gt; element (but not other &lt;a&gt; elements in the page)
        </td>
    </tr>
    <tr>
        <td>Descendant
        </td>
        <td>p a { }
        </td>
        <td>Targets any &lt;a&gt; elements that sit inside a &lt;p&gt; element, even if there are other elements nested between them
        </td>
    </tr>
    <tr>
        <td>Adjacent sibling 
        </td>
        <td>h1+p { }
        </td>
        <td>Targets the first &lt;p&gt; element after any &lt;h1&gt; element (but not other &lt;p&gt; elements
        </td>
    </tr>
</table>
</div>
</div></main>
</div>
<!-- COMMENT:  footer     -->
<footer>
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/responsive-footer-nav.php'; ?>
</footer>
</div>
</body>
</html>