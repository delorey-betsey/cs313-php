<!DOCTYPE html>
<html>
    <head>
        <title>Forms</title>
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
        <h1 style="text-align:left;">EXPERIENCE WITH CONTRACT FORMS</h1>      
        <div>
        <table class="table td">
        <col style="width:50%">
        <col style="width:50%">
            <tr>
                <td style="border:5px solid #FFCD00"><a href="http://www.consensusdocs.org/">
                    <img src="06forms/consensusdocs.jpg" alt="consensusdocs" height="75" width="300" style="text-align: center;"></a>
                </td>
                <td style="border:5px solid #FFCD00"><a href="http://www.aia.org/index.htm">
                    <img src="06forms/aiacontractdocs.jpg" alt="aiacontractdocs" height="75" width="300" style="text-align: center;"></a>
                </td>
            </tr>
        </table>
        </div>
        
        <p>Kevin Delorey was appointed to Association of General Contractors of America (AGC) steering committee to review and revise their construction contract forms early in 2012.  The ConsensusDocs300 form, TriParty Agreement for Integrated Project Delivery, was the first standard IPD agreement published in the United States.   
        </p>
        <p>The Owner, Designer and Constructor all sign the same agreement. This agreement incorporates Lean principles and is also known as a relational contract. A core team at both the project management and project development levels is created to make consensus-based project decisions to increase project efficiency and results. 
        </p>
        <p>Kevin has been sought out to present seminars featuring full comparison of AGC’s ConsensusDOCS and the American Institute of Architects (AIA) IPD Forms for Building Contractors in many settings to all different audiences.  Including: 
        </p>
        <ul>
            <li>The AGC and the Private/Public Industry Advisory Council 
            </li>
            <li>The Construction Owners Association of America (COAA) 
            </li>
            <li>Joint Symposium sponsored by AIA and AGC 
            </li>
            <li>Joint Symposium sponsored by  Harvard Business School and Harvard Graduate School of Design 
            </li>
            <li>American Bar Association Forum on the Construction Industry Annual Meeting 
            </li>
            <li>Continuing legal education and training seminars for law firms, among others. 
            </li>
        </ul>
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