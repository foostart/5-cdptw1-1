    <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }   
    $less = new lessc;
    $less->compileFile('less/1964.less', 'css/1964.css');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>1964</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/1964.css">	
    <script src="../1964/js/jquery-2.1.4.min.js"></script>
    <script src="../1964/js/swiper.min.js"></script>  
</head>
<body>
	<?php include '../1964/1964-content.php'; ?>  
    <script src="../1964/js/1964.js"></script>
</body>
</html>