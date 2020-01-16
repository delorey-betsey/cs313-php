<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage   -->
<body>

<!-- COMMENT:  flexbox header     -->   
<header><div>    
<div class="sub-logo" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-logo.php'; ?>
</div>
<!-- COMMENT:   sub-banner  -->
<div class="sub-banner">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    <div>Project Examples</div>
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
<!-- COMMENT:   section 1 left  -->
    <div class="info"  >
        <h1 style="text-align:left">PROJECT EXAMPLES</h1>
        <h2>WIDMIR</h2>
        <h3>Wisconsin Institutes for Discovery -- Mordridge Institute for Research</h3>
        <div >
        <table style="width:80%" >
            <tr> 
                <td><img src="07projects/WIDMIR_extsw.jpg" alt="WIDMIR"></td>
            </tr>
        </table>
        </div>
        <P>"The new Wisconsin Institute for Discovery and the Morgridge Institute for Research (WID-MIR) in Madison, Wisconsin, is designed to challenge convention on many levels - not least of which was the way the project was managed and delivered.
        </P>
        <P>"The 330,000-gsf Wisconsin Institutes for Discovery and the Morgridge Institute for Research WID-MIR in Madison, Wisconsin, is located on the University of Wisconsin UW campus but brings together private and public entities. Construction on the $162-million project began in May 2008, with completion in December 2010. (TradelineInc.com)"
        </P>
    </div>
</div></main>

<!-- COMMENT:  footer in sidebar  -->
</body>
</html>