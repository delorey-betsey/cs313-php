<!DOCTYPE html>
<html>
    <head>
        <title>Cool Places</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">       
        <link rel="stylesheet" href="/02bprove/stylesheet.css" media="screen">       
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
        <script src="02bprove/scripts.js"></script>
        <script>
            $(document).ready(function(){
                $("p").mouseover(function(){
                    $("p").css("background-color", "yellow");
                });
                $("p").mouseout(function(){
                    $("p").css("background-color", "white");
                });
            });
        </script>
    </head>

<!-- COMMENT:   begin webpage  -->
<body>
<div class="container">
    
<!-- COMMENT:  header     -->
<?php include 'modules/responsive-header.php'; ?>

<!-- COMMENT:  nav     -->
<?php include 'modules/responsive-nav.php'; ?>

<div class="row">

    <main><div>

        <!-- Cool Places to Visit    --> 

        <div class="info">
        <!-- Cool Places to Visit    -->    
            <div class="description">                
                <div class="redfont" align="left" style="margin: 15px 0px 0px;font-weight: bold; font-size: 18px;">
                    <p>Jamestown Settlement--Virginia</p>
                </div>
                <div align="right" style="width: 140px; border: 1px solid rgb(204, 204, 204); color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">
                <a href="https://www.historyisfun.org/jamestown-settlement/">
                    <img src="00homepage/Jamestown-colony-exterior.jpg" alt= "Jamestown map"  style="border:5px solid #e0162b;border-radius:5px" />
                </a>    
                </div>
            </div> 
        </div> 

    </div></main>

</div>
    
<!-- COMMENT:  footer     -->
    <footer>
        <?php include  'modules/responsive-footer-nav.php'; ?>
    </footer>
</div>
    
</div>
</body>
</html>