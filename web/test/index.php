<!DOCTYPE html>
<html>
    <head>
        <title>Kevin Delorey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>

<!-- COMMENT:   begin webpage  -->
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

<!-- COMMENT: top nav  -->
    <div class="nav1linkshome" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav1linkshome.php'; ?>
    </div> 

<!-- COMMENT:  body sections     -->
<!-- COMMENT:  main question     -->
<div class="question">

<table >
        <col style="width:30%">
        <col style="width:30%">
        <col style="width:30%">       
    <tr>
        <td style="width:30%">What's the difference?
        </td> 
        <td style="width:30%">&nbsp; &nbsp; &nbsp; &nbsp; <strong>Kevin A. Delorey</strong>
        </td>
        <td style="width:30%">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "Know-how"
        </td> 
         
    </tr>
</table>
</div>  

<div class="info">
<table class="table td" style="border:3px solid #363204">
    <col style="width:40%">
    <col style="width:60%">
    <tr>
        <td ><h2 style="text-align:center"><br>Traditional Methods</h2>
        </td>

        <td ><h2 style="text-align:center"><strong><em><br>Today's </em>Project Management</strong></h2>
        </td>
    </tr>
    <tr>
        <td> 
            <ul>
                <li> Lack of communication leads to lack of trust.</li>
                <li> Failure to document decisions leads to disputes.</li>
                <li> Unrealistic expectations create unwelcome surprises.</li>
            </ul>
        </td>

        <td>
            <ul>
                <li> Involve key participants early to gain benefit of expertise. </li>
                <li> Use of latest technologies to increase efficiency and decrease errors.</li>
                <li> Shared risk/shared reward to motivate parties to collaborate.</li>    
            </ul></td>
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