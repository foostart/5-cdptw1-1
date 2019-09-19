
<!DOCTYPE html>

<html>

    <head>
        <title>SlideShow</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


        <?php
        if (!class_exists('lessc')) {
            include('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="top"></div>
        <div class="container"> 
            <div class="mod-custom-6">  
                <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="images/1.jpg" alt="responsive content slider" title="Cho tuyen" id="wows1_0"/></li>
                            <li><img src="images/2.jpg" alt="featured content slider" title="Brigde" id="wows1_1"/></li>
                            <li><img src="images/3.jpg" alt="html content slider" title="Egg" id="wows1_2"/></li>
                            <li><img src="images/4.jpg" alt="html content slider" title="Home" id="wows1_3"/></li>
                            <li><img src="images/5.jpg" alt="html content slider" title="Heart" id="wows1_4"/></li> 
                        </ul></div>
                    <div class="ws_bullets">
                        <div>
                            <a href="#" title="Wild"></a>
                            <a href="#" title="Wild"></a>
                            <a href="#" title="Wild"></a>
                            <a href="#" title="Wild"></a>
                            <a href="#" title="Wild"></a>
                        </div>
                    </div> 
                </div>	  
                <br />
            </div>
        </div>
        <script src="js/wowslider.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>

    </body>
</html>