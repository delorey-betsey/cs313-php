<!DOCTYPE html>
<html>
    <head>
        <title>Elevator Pitch</title>
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
<!-- COMMENT:  left sidebar nav  -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT: section 1 left   -->
<div class="siteplan">
    <h2>ELEVATOR PITCH</h2>

    <p>I work with developers, for example, owners, architects, general contractors, also sub-contractors, consultants, suppliers and so on, from the beginning of a project, to help them create an effective, collaborative team.  Here is my card (with bulleted list and contact name and info).</p>

    <ul>
        <li>We establish channels of communication and problem-solving protocols.</li>
        <li>We break down traditional barriers and teach collaborative principles.</li>
        <li>We build up a trust-based team.</li>
        <li>I consult on the governing documents, if necessary.</li>
    </ul>

    <p>You may be interested in a unique project I can show you here on the UW-Madison campus that was one of the first custom multi-party contracts, and we reached an award-winning outcome. In fact, we came in on time, under budget and with zero workplace injuries!
    </p>
    <p>Whatever challenges you face in your project management, I would like to show you how Construction Collaboratory can make a big difference!  Have a good day--
    </p>     
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