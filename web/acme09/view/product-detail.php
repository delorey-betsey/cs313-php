<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $item['invName']; ?> | Acme, Inc.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/acme/css/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    </head>

<body>
    <!-- COMMENT:  flexbox header     -->   
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>

    <!-- COMMENT:  flexbox nav     -->
    <nav>
        <?php echo $navList; ?>
    </nav>

    <!-- COMMENT:  flexbox main     -->  
     
    <?php if(isset($message)){ echo $message; } ?>
    <?php if(isset($sglDisplay)){ echo $sglDisplay; } ?>
    
    <?php if(isset($thumbnailDisplay)){ echo $thumbnailDisplay; } ?>
    <?php if(isset($tmessage)){ echo $tmessage; } ?>
    
    <!-- COMMENT:  flexbox footer     --> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>
</html>