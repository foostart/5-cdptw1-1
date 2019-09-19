       <?php
       $url_host = 'http://' . $_SERVER['HTTP_HOST'];
       $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
       $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
       preg_match_all($pattern_uri, __DIR__, $matches);
       $url_path = $url_host . $matches[1][0];
       $url_path = str_replace('\\', '/', $url_path);
       if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1971.less', 'css/1971.css');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/slideshow-main-css.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/slideshow-main-js.js"></script>
    <script src="js/lightSlider.js"></script>
</head>
<body>
  <?php include '../1971/1971-content.php'; ?>
</body>
</html>