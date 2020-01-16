<!DOCTYPE html>
<html>
    <head>
        <title>Asset List 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="stylesheet.css">       
<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<!-- COMMENT:  begin webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">
<!-- COMMENT:    -->
    <div class="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/siteplan_nav.php'; ?>
    </div>

<!-- COMMENT:  flexbox main     -->  
<main><div>
<!-- COMMENT: body sections   -->
<!-- COMMENT: section 1 left   -->
<div class="siteplan">
    <h2>ASSET LIST PART 1</h2>
<table class="table td" style="border:3px solid #363204">
    <col style="width:30%">
    <col style="width:70%">
    <tr>
        <td>Quick snapshot of your service/s?  FAQs?
        </td>
        <td>
            <UL>
                <LI>Upbeat personal introduction video clip</LI>
                <LI>Adobe flash three shot image slide—
                    Capitol view from desk
                    Kevin meeting with clients around table    
                    Professional headshot </LI>
                <LI>FAQ List (link)</LI>
            </UL>
        </td>
    </tr><tr>
        <td>Who are you?
        </td>
        <td>
            <UL>
                <LI>Bio family, education, professional </LI>
                <LI>References of former clients and collaborators</LI>
                <LI>Kevin and wife Disney shot (link)</LI>
                <LI>Kevin, wife, grandkids shot with audio of priorities and work ethic.</LI>
            </UL>
        </td>
    </tr><tr>
        <td>Contact info.
        </td>
        <td>
            <UL>
                <LI>Contact info, address, and phone.</LI>
                <LI>Email link </LI>
                <LI>Phone link</LI>
            </UL>
        </td>
    </tr><tr>
        <td>What qualifies you on this topic?
        </td>
        <td>
            <UL>
                <LI>Professional credentials</LI>
                <LI>Licenses</LI>
                <LI>Training certificates</LI>
                <LI>Book Chapter</LI>
                <LI>Presentations at national conferences on IPD</LI>
                <LI>Presentation at Harvard</LI>
                <LI>Some PPT slide (link).</LI>
            </UL>
        </td>
    </tr><tr>
        <td>How can your experience benefit me?
        </td>
        <td>Bulleted descriptions for PM for owners, PM for architects, and PM for contractors.
        </td>
    </tr><tr>
        <td>How are you different?
        </td>
        <td>
            <UL>
                <LI>Background Audio--I speak the language you speak—simple, down-to-earth.  I start at the very beginning with understandable basics. Clients have commented…(quotes).</LI>
                <LI>Diagram—foundation to finish</LI>
            </UL>
        </td>
    </tr><tr>
        <td>Forms
        </td>
        <td>
           <UL>
                <LI>Link to AGC ConsensusDocs</LI>
                <LI>Link to AIA ContractDocs links</LI>              
            </UL>
       </td>
    </tr><tr>
        <td>Show me projects.
        </td>
        <td>Highlighting and comparison of existing projects individual sketches in Word docs.
(personally worked on/personally aware of)
            <UL>
                <LI>by cost </LI>
                <LI>location</LI>
                <LI>pm model</LI>
                <LI>successes</LI>
                <LI>awards</LI>
                <LI>developer satisfaction quotes</LI>
            </UL>
Summary comparison table by project size and location in Word doc.
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