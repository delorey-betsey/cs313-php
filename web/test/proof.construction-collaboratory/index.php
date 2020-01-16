
<html>
    <head>
        <title>Proof.Construction-Collaboratory.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css"/>
    </head>

<!--COMMENT:-----begin webpage-------------------------------------->
<body>

<!--COMMENT:----banner--------->
<div class="homepage" >
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/banner.php'; ?>

<!--COMMENT:----body--------->
<div id="body"

<!--COMMENT:--left sidebar nav------------------------------------>
    <div class="sidebar">
        <h1 style="text-align:center;">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
        <canvas height="500" width="250"></canvas> 
    </div>

<!--COMMENT:----body sections--------->
<!--COMMENT:-----top nav------------------------------------->
    <div class="topnav" >
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/topnav.php'; ?>
    </div>
    <div class="question" >
        What's the difference?
    </div>

<!--COMMENT:--section 1 left-------------------------------------->
    <div class="infoleft"  >
        <h1 style="text-align:center;">infoleft</h1>
        <h3>infoleft text text text text text </h3>
        <canvas height="325" width="255"></canvas>
    </div>

<!--COMMENT:--section 2 right--------------------------------------->
    <div class="inforight" >
        <h1 style="text-align:center;">inforight</h1>
        <h3>inforight text text text text text </h3>
        <canvas height="325" width="255"></canvas>
    </div>
</div>
 
<!--COMMENT:---footer--------------------------------------->
<footer>
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
</footer>


<!--COMMENT:---Whew!--------------------------------------->

</body>
</html>
