
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
				<div class="promotion-item" style="background: #ffe7e7">
					
					<div class="promotion-content">
						<div class="promotion-img">
							<img src="//<?php echo $url_path ?>/images/1.png" alt="image_not_found">
						</div>
						<div class="promotion-text">
							<h2>DUAL-SIM SMARTPHONE</h2>
							<p>For Bussiness Users & Travallers</p>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="promotion-item" style="background: #e1f2f9">
					
					<div class="promotion-content">
						<div class="promotion-img">
							<img src="//<?php echo $url_path ?>/images/2.png" alt="image_not_found">
						</div>
						<div class="promotion-text">
							<h2>3G/4G LTE SMARTPHONE</h2>
							<p>For Bussiness Users & Travallers</p>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="promotion-item" style="background: #e6e2f9">
					
					<div class="promotion-content">
						<div class="promotion-img">
							<img src="//<?php echo $url_path ?>/images/3.png" alt="image_not_found">
						</div>
						<div class="promotion-text">
							<h2>CLEARANCE SALE WEEK</h2>
							<p>For Bussiness Users & Travallers</p>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>



