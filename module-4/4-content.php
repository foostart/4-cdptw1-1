
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
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="type-4">
				<div class="sidebar-nav">
					<div class="well">
						<div class="nav-header"> <i class="icon fa fa-align-justify fa-fw"></i>Admin Menu</div>   
						<ul class="nav nav-list">      
							<li><a href="index"><i class="icon-home"></i> Dashboard</a></li>
							<li><a href="#"><i class="icon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
							<li><a href="#"><i class="icon-comment"></i> Comments <span class="badge badge-info">10</span></a></li>
							<li class="active"><a href="#"><i class="icon-user"></i> Members</a></li>
							<li><a href="#"><i class="icon-comment"></i> Settings</a></li>
							<li><a href="#"><i class="icon-share"></i> Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

