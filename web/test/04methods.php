<!DOCTYPE html>
<html>
    <head>
        <title>Methods</title>
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
<!-- COMMENT:   section 1 left  -->
    <div class="info"  >
        <h1 style="text-align:left;"><strong><em>TODAY'S </em></strong><br>CONSTRUCTION PROJECT MANAGEMENT</h1>
        <audio controls>
            <source src="04methods/kadaudio1.m4a" type="audio/ogg">
            <source src="04methods/kadaudio1.m4a" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>

<!-- COMMENT:  DIV ID ONE  -->
<div>
<!-- COMMENT:  IPD  -->
    <p style="text-align:center">  <strong>IPD</strong><br/>Integrated Project Delivery 
    </p>
    <img src="04methods/ipdlogo.JPG" alt= "IPD integrated project development" style="border:10px solid #75ad3e; margin-left:2%; margin-right:2%;" height="150">
    <p>"Integrated Project Delivery (IPD) is a project delivery approach  
that integrates people, systems, business structures and practices into a
<strong>POWERTEAM</strong>  that collaboratively harnesses the talents and insights of  
all participants to reduce waste and optimize efficiency through all phases of
design, fabrication and construction. 
    </p>
    <p>"Integrated Project Delivery principles can be applied to a  
variety of contractual arrangements and Integrated Project Delivery teams will
usually include members well beyond the basic triad of owner, designer
and contractor. At a minimum, though, an integrated project includes
tight collaboration between the owner, architect/engineers, and builders
ultimately responsible for construction of the project, from early design
through project handover." (A Working Definition, AIA California Council, 2007) 
    </p>
</div>

<!-- COMMENT:  DIV ID TWO  -->
<div>
<!-- COMMENT:  LEAN  -->
    <p style="text-align:center">  <strong>LEAN</strong><br/>Project Delivery System 
    </p>
    <img src="04methods/leanlogo.JPG" alt= "Lean project management" style="border:10px solid #75ad3e; margin-left:2%; margin-right:2%;" height="150">
    <p> "Pull planning is one of the fundamental concepts underlying lean  
project delivery.  This method enables the <strong>POWERTEAM</strong>  to share a much  
better understanding of the work required and identify early on the key sequencing  
details.  This results in project completion with fewer conflicts, disruptions and less  
friction.
    </p>
    <p>	"It's common to hear Lean practitioners say that they are "at (or  
on) the gemba." Gemba, loosely translated as "actual place", represents a purposeful  
attempt to observe what is REALLY going on, as real improvement requires a shop-floor,  
focus-based observation of current conditions where the work is done. In the case of a  
hospital, this means how patients ultimately experience services."   
(leanconstruction.org)
    </p>
</div>

<!-- COMMENT:  DIV ID THREE  -->
<div>
<!-- COMMENT:  BIM  -->
    <p style="text-align:center">  <strong>BIM</strong><br/>Building Information Modeling
    </p>
    <img src="04methods/bimlogo.JPG" alt= "BIM building information modeling" style="border:10px solid #75ad3e; margin-left:2%; margin-right:2%;" height="150">
    <p> “Intimate” BIM is realized when <strong>POWERTEAM</strong> of the  
construction manager, design team and owner contractually share risk and reward. This is  
made possible thru BIM-enabled integrated project delivery.  "Intimate” BIM or “social”  
BIM encourages teams to collaboratively produce better drawings, reduce time and cost in  
a project.   
    </p>
    <p>	"Traditional Design-Bid-Build, Construction Management at Risk,Design/Build 
and Integrated Project Delivery (IPD) methods are the most common project delivery 
approaches that the industry currently practices. No matter which delivery approach is 
chosen, the general contractor or the construction manager can use BIM. 
    </p>
    <p> "Construction managers or general contractors can use BIM to extract  
quantities of work to prepare cost estimates. Furthermore, they can provide powerful 3D  
renderings. Moreover, schedule integrated BIM known as 4D BIM can be used for animations,  
safety analysis, and to prepare site logistic plans. Construction managers can use BIM to  
coordinate work with subcontractors. They can also update schedule and costs with BIM.  
Lastly, they can turn over an as-built building information model to the owner’s  
maintenance team."  (Benefits of  Building Information Modeling, Hergunsel, 2011) 
    </p>
</div>
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