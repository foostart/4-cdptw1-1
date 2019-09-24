
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="type-4">
				<div class="all-departments-menu clearfix">
					<div class="title-text bg-gplus-red">
						<i class="flaticon-bulleted-list"></i> 
						Admin Menu
					</div>
					<ul class="clearfix">
						<li class="menu-item-has-children has-mega-menu">
							<a href="#!"> Dashboard</a>
							<ul class="mega-menu clearfix" style="background-image: url(images/1.jpg);">
								<li>
									<span class="title-text color-gplus-red mb-30">FAQ's</span>
									<ul class="menu-item-list clearfix">
										<li><a href="#!">How do I install XAMPP?</a></li>
										<li><a href="#!">Does XAMPP include MySQL or MariaDB?</a></li>
										<li><a href="#!">How can I start XAMPP without setup?</a></li>
										<li><a href="#!">How do I start and stop XAMPP?</a></li>
										<li><a href="#!">How can I test that everything worked?</a></li>
										
										
									</ul>
								</li>

								<li>
									<span class="title-text color-gplus-red mb-30">PHPINFO</span>
									<ul class="menu-item-list clearfix">
										<li><a href="#!">Php info</a></li>
										<li><a href="#!">Php info</a></li>
										<li><a href="#!">Php info</a></li>
										<li><a href="#!">Php info</a></li>
										<li><a href="#!">Php info</a></li>
										<li><a href="#!">Php info</a></li>
									</ul>
								</li>

								<li>
									<span class="title-text color-gplus-red mb-30">PHPMYADMIN</span>
									<ul class="menu-item-list clearfix">
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li ><a href="#!">Messages </a></li>
						<li ><a href="#!"> Comments </a></li>
						<li><a href="#!">  Settings</a></li>
						<li><a href="#!">Logout</a></li>
						<li><a href="#!">About</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

