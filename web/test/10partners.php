<!DOCTYPE html>
<html>
    <head>
        <title>Partners</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  flexbox header     -->   
<header><div>
<!-- COMMENT:  sub-logo     -->
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div> Partners</div>
</div>
</div></header>

<!-- COMMENT:  flexbox aside     -->   
<aside><div>
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">
        <h1 style="text-align:center;">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>
</div></aside>


<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT:  top navigation links   -->
    <!-- COMMENT: top nav  -->
    <div class="nav1links" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1links.php'; ?>
    </div> 
    
<!-- COMMENT:  body sections   -->
<!-- COMMENT:  section 1 left   -->
    <div class="info"  >
        <h1 style="text-align:left">RELIABLE BUSINESS PARTNERS</h1>
        <h2 style="text-align:left">Trust and exceptional ability are critical to successful project outcomes.
        </h2>
        <h3 style="text-align:left">We highly recommend the following individuals or firms with whom we have personal project experience.
        </h3>
    
<table >
    <col style="width:30%">
    <col style="width:30%">
    <col style="width:30%">
    <thead>
        <tr>
            <th style="border:5px solid #FFCD00">Architects</th>
            <th style="border:5px solid #FFCD00">General Contractors</th>
            <th style="border:5px solid #FFCD00">Project Consultants</th>
        </tr>
    </thead>
    <tr>
        <td>John Smith
        </td>
        <td>John Fish
        </td>
        <td>Kendall Thompson
        </td>
    </tr>
    <tr>
         <td>West Palm Beach, FL
        </td>
         <td>Phoenix, AZ
        </td>
        <td>Chicago, IL
        </td>
    </tr>
    <tr>
         <td>555-987-5432
        </td>
         <td>555-123-9876
        </td>
        <td>555-765-1290
        </td>
    </tr>
</table>
</div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>