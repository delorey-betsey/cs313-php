<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
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
        <h1 style="text-align:left">PROJECT EXAMPLES</h1>
        <h2>WIDMIR</h2>
        <h3>Wisconsin Institutes for Discovery -- Mordridge Institute for Research</h3>
        <div >
        <table style="width:80%" >
            <tr> 
                <td><img src="07projects/widmir70.jpg" alt="WIDMIR"></td>
            </tr>
        </table>
        </div>
        <P>"The new Wisconsin Institute for Discovery and the Morgridge Institute for Research (WID-MIR) in Madison, Wisconsin, is designed to challenge convention on many levels - not least of which was the way the project was managed and delivered.
        </P>
        <P>"The 330,000-gsf Wisconsin Institutes for Discovery and the Morgridge Institute for Research WID-MIR in Madison, Wisconsin, is located on the University of Wisconsin UW campus but brings together private and public entities. Construction on the $162-million project began in May 2008, with completion in December 2010. (TradelineInc.com)"
        </P>
        <h2>MSU  Shaw Hall</h2>
        <h3>Lean Project Delivery Michigan State University</h3>
        <div >
        <table style="width:80%" >
            <tr> 
                <td><img src="07projects/shawhall70.jpg" alt="MSU Shaw Hall"></td>
            </tr>
        </table>
        </div>
        <P>The improvements to Shaw Hall took place using a new process called Lean/IPD (Integrated Lean Project Delivery), which is aimed at maximizing value, minimizing waste and increasing the reliability of project planning and execution during design and construction phases.</P>
        <P>The Shaw Hall Dining Center received gold-level LEED certification, the second highest out of four levels of certification—the Broad Art Museum and the Bott Building received silver-level awards. The refurbished dining hall was recognized for its energy-saving features, including variable-speed fans, low-flow plumbing fixtures, light-emitting diode, low-wattage lights and use of reclaimed lumber from demolished barns from Michigan. </P>
        <p><a href="http://www.usgbc.org/projects/msu-shaw-hall-dining-center">MSU Shaw Hall Renovation Gold Level LEED Certifcation</a></p>
        <h2>Overture Center for the Arts</h2>
        <h3>Madison, Wisconsin</h3>
        <div >
        <table style="width:80%" >
            <tr> 
                <td><img src="07projects/overture70.jpg" alt="MSU Shaw Hall"></td>
            </tr>
        </table>
        </div>
        <P>In 1997, Jerry Frautschi, a fifth-generation Madisonian, delighted the community by pledging $50 million to build what he called Overture Center for the Arts. Two years later, it was clear that his initial gift would not be enough to carry out his original vision, and so he pledged another $50 million. When all was said and done, he had donated $205 million — the largest single gift to the arts in American history to date.</P>
        <P>Overture Hall opened on September 19, 2004, along with four other performance spaces. Opening celebrations included a spirited gala and a weekend full of lively performances. The national tour of Phantom of the Opera was the first major Broadway show to open on an Overture stage, greeted by an enthusiastic Madison audience. </P>
        <p>The Oscar Mayer Theater, Isthmus Playhouse, and Madison Art Center were completely renovated and reopened to the public in 2006 as the Capitol Theater, restored to its original designation and look; The Playhouse; and the Madison Museum of Contemporary Art.</p>
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