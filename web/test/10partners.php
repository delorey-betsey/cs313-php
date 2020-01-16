<!DOCTYPE html>
<html>
    <head>
        <title>Partners</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>

<!-- COMMENT:  begin webpage   -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

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
        <br><br><br>
        </h3>
    
<table >
    <col style="width:30%">
    <col style="width:30%">
    <col style="width:30%">
    <thead>
        <tr>
            <th style="border:5px solid #FFCD00">Architects</th>
            <th style="border:5px solid #FFCD00">General Contractors</th>
            <th style="border:5px solid #FFCD00">Project Consultants / <br>Owner’s Representatives</th>
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
<br><br><br>
<table>
    <col style="width:30%">
    <col style="width:30%">
    <col style="width:30%">
    <thead>
        <tr>
            <th style="border:5px solid #FFCD00">MEP Engineers</th>
            <th style="border:5px solid #FFCD00">MEP Subcontractors</th>
            <th style="border:5px solid #FFCD00">Risk Management Specialists</th>
        </tr>
    </thead>
    <tr>
        <td>Mark Johnson
        </td>
        <td>Jess Sifuentes
        </td>
        <td>Hannah Lucia
        </td>
    </tr>
    <tr>
         <td>Washington, D.C.
        </td>
         <td>Milwaukee, WI
        </td>
        <td>Tampa, FL
        </td>
    </tr>
    <tr>
         <td>555-334-5620
        </td>
         <td>555-801-9888
        </td>
        <td>555-479-6379
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