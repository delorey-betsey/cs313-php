<!DOCTYPE html>
<html>
    <head>
        <title>CSS Properties</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT: begin webpage   -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT:   left sidebar nav -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/teachingpresentation_nav.php'; ?> 
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT:  section 1 left  -->
   
<div class="teachingpresentation">
    <h2>CSS PROPERTIES</h2>
<table class="tableprop">
    <col style="width:32%">
    <col style="width:32%">
    <col style="width:32%">
    <tr>
        <td>
            align-items
            <br>align-self
            <br>animation
            <br>animation-delay
            <br>animation-direction
            <br>animation-duration
            <br>animation-fill-mode
            <br>animation-iteration-count
            <br>animation-name
            <br>animation-play-state
            <br>animation-timing-function
            <br>backface-visibility
            <br>background
            <br>border-collapse
            <br>border-color
        </td>
        <td>
            border-imaged
            <br>border-image-outset
            <br>border-image-repeat
            <br>background-attachment
            <br>background-clip
            <br>background-color
            <br>background-image
            <br>background-origin
            <br>background-position
            <br>background-repeat
            <br>background-size
            <br>border
            <br>border-bottom
            <br>border-bottom-color
            <br>border-bottom-left-radius
        </td>
        <td>
            border-bottom-right-radius
            <br>border-bottom-style
            <br>border-bottom-widths
            <br>border-color
            <br>border-image
            <br>border-image-outset
            <br>border-image-repeat
            <br>border-image-slice
            <br>border-image-source
            <br>border-image-width
            <br>border-left
            <br>border-left-color
            <br>border-left-stylebook
            <br>border-left-width
            <br>border-radius
        </td>
    </tr>
</table>
<table class="tableprop" style="padding-top:40%">
        <col style="width:32%">
        <col style="width:32%">
        <col style="width:32%">
     <tr>
        <td>
            border-right
            <br>border-right-color's
            <br>border-right-style
            <br>border-right-width
            <br>border-spacing
            <br>border-style
            <br>border-top
            <br>border-top-color
            <br>border-top-left-radius
            <br>border-top-right-radius
            <br>border-top-style
            <br>border-top-width
            <br>border-width
            <br>bottom
            <br>box-shadow
        </td>
        <td>
            box-sizing
            <br>caption-sidearm
            <br>color
            <br>column-count
            <br>column-fill
            <br>column-gap
            <br>column-rule
            <br>column-rule-color
            <br>column-rule-style
            <br>column-rule-width
            <br>column-span
            <br>column-width
            <br>columns
            <br>content
            <br>counter-increment
        </td>
        <td>            
            counter-reseted
            <br>direction
            <br>display
            <br>empty-cells
            <br>flex
            <br>flex-basis
            <br>flex-direction
            <br>flex-flow
            <br>flex-grow
            <br>flex-shrink
            <br>flex-wrap
            <br>float
            <br>font
            <br>@font-face
            <br>font-family
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