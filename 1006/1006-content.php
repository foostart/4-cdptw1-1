
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-21">
	<div class="container">
		<!--HERDER-->
		<div class="row">
			<div class="all-products">  
				<!--NAV-->
				<ul class="nav nav-tabs" id="myTab">
					<li class="orderby"><select name="orderby" class="slect" >
						<option value="menu_order" selected="selected">Default sorting</option>
						<option value="popularity">Sort by popularity</option>
						<option value="rating">Sort by average rating</option>
						<option value="date">Sort by newness</option>
						<option value="price">Sort by price: low to high</option>
						<option value="price-desc">Sort by price: high to low</option>
					</select></li>

					<li class="active"><a data-toggle="tab" href="#gird"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
					<li><a data-toggle="tab" href="#list"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
				</ul>
				<div class="clearfix"></div>
				<div class="tab-content">
					<div id="gird" class="tab-pane fade in active">
						<div class="col-md-4 products">
							<div class="item">
								<a href="#"><img src="images/1.jpg"></a>
								<div class="chu2">
									<a href="#" class="chu1">APPLE IPHONE 6S PLUS</a><br>
									<del>£600.00 </del> <strong class="gia"> £560.00</strong>
									<div class="clearfix"></div>
									<div class="icon-fa">
										<i class="fa fa-eye" aria-hidden="true"></i>
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 products">
							<div class="item">
								<a href="#"><img src="images/7.jpg" ></a>
								<div class="chu2">
									<a href="#" class="chu1">BLU VIVO 5 SMARTPHONE</a><br>
									<strong class="gia"> £875.00</strong>
									<div class="clearfix"></div>
									<div class="icon-fa">
										<i class="fa fa-eye" aria-hidden="true"></i>
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 products">
							<div class="item">
								<a href="#"><img src="images/3.jpg" ></a>
								<div class="chu2">
									<a href="#" class="chu1">HUAWEI NEXUS 6P</a><br>
									<strong class="gia"> £875.00</strong>
									<div class="clearfix"></div>
									<div class="icon-fa">
										<i class="fa fa-eye" aria-hidden="true"></i>
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div id="list" class="tab-pane fade in">
						<div class="col-md-12 products">
							<div class="item">
								<div class="col-md-4">
									<a href="#"><img src="images/1.jpg"></a>
								</div>
								<div class="col-md-8">
									<div class="chu2">
										<a href="#" class="chu1">APPLE IPHONE 6S PLUS</a><br>
										<del>£600.00 </del> <strong class="gia"> £560.00</strong>
										<div class="description"><p>Đặc điểm nổi bật của iPad Mini 7.9 inch Wifi Cellular 64GB (2019)

											Tìm hiểu thêm
											Tìm hiểu thêm
											Bộ sản phẩm chuẩn: Cáp Lightning,Adapter

											iPad Mini 7.9 inch Wifi Cellular 64GB (2019) đánh dấu sự trở lại mạnh mẽ của Apple trong phân khúc máy tính bảng nhỏ gọn, có thể dễ dàng mang theo bên mình.
											Hiệu năng mạnh mẽ hàng đầu
										iPad Mini 7.9 inch Wifi Cellular 64GB (2019) được Apple trang bị hiệu năng rất ấn tượng với con chip Apple A12 cùng RAM 3 GB và 64 GB bộ nhớ trong.</p></div>
										<div class="clearfix"></div>
										<div class="icon-fa">
											<i class="fa fa-eye" aria-hidden="true"></i>
											<i class="fa fa-heart-o" aria-hidden="true"></i>
											<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 products">
							<div class="item">
								<div class="col-md-4">
									<a href="#"><img src="images/1.jpg"></a>
								</div>
								<div class="col-md-8">
									<div class="chu2">
										<a href="#" class="chu1">APPLE IPHONE 6S PLUS</a><br>
										<del>£600.00 </del> <strong class="gia"> £560.00</strong>
										<div class="description"><p>Đặc điểm nổi bật của iPad Mini 7.9 inch Wifi Cellular 64GB (2019)

											Tìm hiểu thêm
											Tìm hiểu thêm
											Bộ sản phẩm chuẩn: Cáp Lightning,Adapter

											iPad Mini 7.9 inch Wifi Cellular 64GB (2019) đánh dấu sự trở lại mạnh mẽ của Apple trong phân khúc máy tính bảng nhỏ gọn, có thể dễ dàng mang theo bên mình.
											Hiệu năng mạnh mẽ hàng đầu
										iPad Mini 7.9 inch Wifi Cellular 64GB (2019) được Apple trang bị hiệu năng rất ấn tượng với con chip Apple A12 cùng RAM 3 GB và 64 GB bộ nhớ trong.</p></div>
										<div class="clearfix"></div>
										<div class="icon-fa">
											<i class="fa fa-eye" aria-hidden="true"></i>
											<i class="fa fa-heart-o" aria-hidden="true"></i>
											<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 products">
							<div class="item">
								<div class="col-md-4">
									<a href="#"><img src="images/1.jpg"></a>
								</div>
								<div class="col-md-8">
									<div class="chu2">
										<a href="#" class="chu1">APPLE IPHONE 6S PLUS</a><br>
										<del>£600.00 </del> <strong class="gia"> £560.00</strong>
										<div class="description"><p>Đặc điểm nổi bật của iPad Mini 7.9 inch Wifi Cellular 64GB (2019)

											Tìm hiểu thêm
											Tìm hiểu thêm
											Bộ sản phẩm chuẩn: Cáp Lightning,Adapter

											iPad Mini 7.9 inch Wifi Cellular 64GB (2019) đánh dấu sự trở lại mạnh mẽ của Apple trong phân khúc máy tính bảng nhỏ gọn, có thể dễ dàng mang theo bên mình.
											Hiệu năng mạnh mẽ hàng đầu
										iPad Mini 7.9 inch Wifi Cellular 64GB (2019) được Apple trang bị hiệu năng rất ấn tượng với con chip Apple A12 cùng RAM 3 GB và 64 GB bộ nhớ trong.</p></div>
										<div class="clearfix"></div>
										<div class="icon-fa">
											<i class="fa fa-eye" aria-hidden="true"></i>
											<i class="fa fa-heart-o" aria-hidden="true"></i>
											<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>
<script>
	$(function () {
		$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		})
	})
</script>