<!DOCTYPE html>
<html>
    <head>
        <title>subpage template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

<!-- COMMENT:  begin webpage  -->

<body>

<!-- COMMENT:   banner    -->
<div class="homepage" >
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-banner.php'; ?>
    Heading Subpage Name Here
</div>

<!-- COMMENT:  left sidebar nav     -->
    <div class="sidebar">
        <h1 style="text-align:center;">Site Navigation</h1>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
    </div>

<!-- COMMENT:    body sections   -->
<!-- COMMENT:  top nav     -->
    <div class="sub-topnav" >
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sub-topnav.php'; ?>
    </div>  

<!-- COMMENT:   section 1 left    -->
    <div class="info"  >
        <h1 style="text-align:center;">info</h1>
        <h3>info text text text text text </h3>
        <canvas height="325" width="510"></canvas>
    </div>
</div>

<!-- COMMENT:  footer in sidebar  -->

<!-- COMMENT:  Whew!     -->

</body>
</html>
