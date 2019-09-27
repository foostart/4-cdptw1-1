
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-1002">
	<div class="container">
		<div class="row">
				<div class="col-md-4">
					<img src="images/rowb-1.jpg" alt="hinh">
				</div>	
				<div class="col-md-4">
					<img src="images/rowb-2.jpg" alt="hinh">
				</div>	
				<div class="col-md-4">
					<img src="images/rowb-3.jpg" alt="hinh">
				</div>	
		</div>
	</div>
</div>



