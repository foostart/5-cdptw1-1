<?php
        if (!class_exists('lessc')) {
            include('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SlideShow</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"></script>
         <script src="js/wowslider.js"></script>
        <script src="js/983.js"></script>      
    </head>
    <body>
    <?php include '../983/983-content.php'; ?>
    </body>
</html>