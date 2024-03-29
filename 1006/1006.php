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
$less->compileFile('less/1006.less', 'css/1006.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>1002</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link href="<?php echo $url_path ?>/css/1006.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">
<script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
<script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $url_path ?>/js/1006.js"></script>
<?php
if (!class_exists('lessc')) {
  include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1006.less', 'css/1006.css');
?>
</head>
<body >
<?php include './1006-content.php'; ?>
</body>
</html>