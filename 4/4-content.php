
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
						Admin Menu
					</div>
					<ul class="clearfix">
						<li class="menu-item-has-children">
							<a href="#!"> <i class="fa fa-home" aria-hidden="true"></i>Dashboard <i style="float:right;margin:0" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<ul class="mega-menu clearfix" style="background-image: url(images/1.jpg);">
								<li>
									<span class="title-text color-gplus-red">FAQ's</span>
									<ul class="menu-item-list clearfix">
										<li><a href="#!">How do I install XAMPP?</a></li>
										<li><a href="#!">Does XAMPP include MySQL or MariaDB?</a></li>
										<li><a href="#!">How can I start XAMPP without setup?</a></li>
										<li><a href="#!">How do I start and stop XAMPP?</a></li>
										<li><a href="#!">How can I test that everything worked?</a></li>
									</ul>
								</li>

								<li>
									<span class="title-text color-gplus-red">PHPINFO</span>
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
									<span class="title-text color-gplus-red">PHPMYADMIN</span>
									<ul class="menu-item-list clearfix">
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
										<li><a href="#!">Phpmyadmin</a></li>
									</ul>
								</li>
							</ul>
							<ul class="dl-submenu">
									<li>
										<a href="#">Men</a>
										<ul class="dl-submenu">
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Chinos &amp; Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Women</a>
										<ul class="dl-submenu">
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Knits</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Blouses</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Children</a>
										<ul class="dl-submenu">
											<li><a href="#">Boys</a></li>
											<li><a href="#">Girls</a></li>
										</ul>
									</li>
								</ul>
						</li>
						<li ><a href="#!"><i class="fa fa-envelope" aria-hidden="true"></i>Messages <span class="badge badge-info">10</span> </a></li>
						<li ><a href="#!"><i class="fa fa-comment" aria-hidden="true"></i>Comments <span class="badge badge-info">4</span></a></li>
						<li><a href="#!"> <i class="fa fa-user" aria-hidden="true"></i>Settings</a></li>
						<li><a href="#!"><i class="fa fa-sign-out" aria-hidden="true"></i>
Logout</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

