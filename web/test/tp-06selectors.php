<!DOCTYPE html>
<html>
    <head>
        <title>Selectors</title>
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
    <div>Selectors</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:    -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?>
    </div>
</div></aside>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT: section 1 left   -->
<div class="teachingpresentation">
    <h1>SELECTORS</h1>
    There are many different types of CSS selector that allow you to <strong>target rules to specific elements</strong> in your html document.

<table class="table td">
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

<!-- COMMENT:  footer in sidebar -->
</body>
</html>