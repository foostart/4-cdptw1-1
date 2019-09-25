<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
$dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/styles.less', 'css/styles.less');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="<?php echo $url_path ?>/css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/docs.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo $url_path ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.js" type="text/javascript"></script>
    </head>
    <body>
      <?php include './1005-content.php'; ?>
    </body>
</html>
