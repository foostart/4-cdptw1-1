
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
  <!--HERDER-->
  <div class="row">
    <div class="col-lg-9 col-md-10 col-sm-12">
      <div class="type-21">
        <div class="product-grid-section">
          <div class="row">

            <!-- filter-content - start -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="filter-content mb-60">
                <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="#!">
                      <select class="filter-select storm-select">
                        <option value="" disabled>Choose your option</option>
                        <option value="1" selected>Show:   12 Products/Page</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </form>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <form action="#!">
                      <select class="filter-select storm-select">
                        <option value="" disabled>Choose your option</option>
                        <option value="1" selected>Sort by:   Price: Low to High</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </form>
                  </div>

                  <div class="col-lg-2 col-md-6 col-sm-12">
                    <ul class="nav filter-nav nav nav-tabs">
                      <li><a class="active" data-toggle="tab" href="#grid-style"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                      <li><a data-toggle="tab" href="#list-style"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
            <!-- filter-content - end -->

            <!-- tab-content - start -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="tab-content mb-60">

                <div id="grid-style" class="tab-pane fade in active show">
                  <div class="row">

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        <div class="post-labels">
                          <ul class="clearfix">
                            <li class="bg-primary">new</li>
                            
                          </ul>
                        </div>
                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        

                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->

                    <!-- product-item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="product-item">
                        <div class="post-labels">
                          <ul class="clearfix">
                          
                            <li class="bg-danger">-50%</li>
                          </ul>
                        </div>
                        <div class="image-container">
                          <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                          <a href="#!" class="quick-view">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            quick view
                          </a>
                        </div>
                        <div class="item-content text-center">
                          <a href="#!" class="item-title">Embick Mid-Century Modern Dining Chair</a>
                          <div class="item-price">
                            <strong class="color-black">$129.00</strong>
                            <del>$359.00</del>
                          </div>
                        </div>
                        <div class="hover-content">
                          <div class="color-options ul-li-center mb-15">
                            <ul>
                              <li><a href="#!" class="color-1"></a></li>
                              <li><a href="#!" class="color-2"></a></li>
                              <li><a href="#!" class="color-3"></a></li>
                            </ul>
                          </div>
                          <a href="#!" class="add-to-cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            add to cart
                          </a>
                          <div class="product-meta ul-li-center">
                            <ul class="clearfix">
                              <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- product-item - end -->


                  </div>  
                </div>

                <div id="list-style" class="tab-pane fade">
                  <!-- product-list-item - start -->
                  <div class="product-list-item clearfix">
                    <div class="image-container float-left">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                    </div>
                    <div class="item-content">
                      <a href="#!" class="item-title">Century Modern Sweatshirt</a>
                      <div class="item-price mb-30">
                        <strong class="color-black">$129.00</strong> <del>$359.00</del>
                      </div>
                      <div class="item-size-color ul-li mb-30 clearfix">

                        <ul class="size-list clearfix">
                          <li><a href="#!">xs</a></li>
                          <li><a href="#!">s</a></li>
                          <li><a href="#!" class="active">m</a></li>
                          <li><a href="#!">l</a></li>
                        </ul>

                        <ul class="color-list clearfix">
                          <li><a href="#!" class="color-1"></a></li>
                          <li><a href="#!" class="color-2"></a></li>
                          <li><a href="#!" class="active color-3"></a></li>
                          <li><a href="#!" class="color-4"></a></li>
                        </ul>

                      </div>
                      <p class="mb-30">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                      </p>
                      <div class="item-btns-group ul-li clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" class="add-to-cart">
                              <i class="flaticon-shopper"></i>
                              add to cart
                            </a>
                          </li>
                           <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-list-item - end -->

                  <!-- product-list-item - start -->
                  <div class="product-list-item clearfix">
                    <div class="image-container float-left">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                    </div>
                    <div class="item-content">
                      <a href="#!" class="item-title">Century Modern Sweatshirt</a>
                      <div class="item-price mb-30">
                        <strong class="color-black">$129.00</strong> <del>$359.00</del>
                      </div>
                      <div class="item-size-color ul-li mb-30 clearfix">

                        <ul class="size-list clearfix">
                          <li><a href="#!">xs</a></li>
                          <li><a href="#!">s</a></li>
                          <li><a href="#!" class="active">m</a></li>
                          <li><a href="#!">l</a></li>
                        </ul>

                        <ul class="color-list clearfix">
                          <li><a href="#!" class="color-1"></a></li>
                          <li><a href="#!" class="color-2"></a></li>
                          <li><a href="#!" class="active color-3"></a></li>
                          <li><a href="#!" class="color-4"></a></li>
                        </ul>

                      </div>
                      <p class="mb-30">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                      </p>
                      <div class="item-btns-group ul-li clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" class="add-to-cart">
                              <i class="flaticon-shopper"></i>
                              add to cart
                            </a>
                          </li>
                          <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-list-item - end -->

                  <!-- product-list-item - start -->
                  <div class="product-list-item clearfix">
                    <div class="image-container float-left">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                    </div>
                    <div class="item-content">
                      <a href="#!" class="item-title">Century Modern Sweatshirt</a>
                      <div class="item-price mb-30">
                        <strong class="color-black">$129.00</strong> <del>$359.00</del>
                      </div>
                      <div class="item-size-color ul-li mb-30 clearfix">

                        <ul class="size-list clearfix">
                          <li><a href="#!">xs</a></li>
                          <li><a href="#!">s</a></li>
                          <li><a href="#!" class="active">m</a></li>
                          <li><a href="#!">l</a></li>
                        </ul>

                        <ul class="color-list clearfix">
                          <li><a href="#!" class="color-1"></a></li>
                          <li><a href="#!" class="color-2"></a></li>
                          <li><a href="#!" class="active color-3"></a></li>
                          <li><a href="#!" class="color-4"></a></li>
                        </ul>

                      </div>
                      <p class="mb-30">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                      </p>
                      <div class="item-btns-group ul-li clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" class="add-to-cart">
                              <i class="flaticon-shopper"></i>
                              add to cart
                            </a>
                          </li>
                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-list-item - end -->

                  <!-- product-list-item - start -->
                  <div class="product-list-item clearfix">
                    <div class="image-container float-left">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg" alt="image_not_found">
                    </div>
                    <div class="item-content">
                      <a href="#!" class="item-title">Century Modern Sweatshirt</a>
                      <div class="item-price mb-30">
                        <strong class="color-black">$129.00</strong> <del>$359.00</del>
                      </div>
                      <div class="item-size-color ul-li mb-30 clearfix">

                        <ul class="size-list clearfix">
                          <li><a href="#!">xs</a></li>
                          <li><a href="#!">s</a></li>
                          <li><a href="#!" class="active">m</a></li>
                          <li><a href="#!">l</a></li>
                        </ul>

                        <ul class="color-list clearfix">
                          <li><a href="#!" class="color-1"></a></li>
                          <li><a href="#!" class="color-2"></a></li>
                          <li><a href="#!" class="active color-3"></a></li>
                          <li><a href="#!" class="color-4"></a></li>
                        </ul>

                      </div>
                      <p class="mb-30">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                      </p>
                      <div class="item-btns-group ul-li clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" class="add-to-cart">
                              <i class="flaticon-shopper"></i>
                              add to cart
                            </a>
                          </li>
                          <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                          <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-list-item - end -->

                  <!-- product-list-item - start -->
                  <div class="product-list-item clearfix">
                    <div class="image-container float-left">
                      <img src="http://<?php echo $url_path ?>/images/3.jpg" alt="image_not_found">
                    </div>
                    <div class="item-content">
                      <a href="#!" class="item-title">Century Modern Sweatshirt</a>
                      <div class="item-price mb-30">
                        <strong class="color-black">$129.00</strong> <del>$359.00</del>
                      </div>
                      <div class="item-size-color ul-li mb-30 clearfix">

                        <ul class="size-list clearfix">
                          <li><a href="#!">xs</a></li>
                          <li><a href="#!">s</a></li>
                          <li><a href="#!" class="active">m</a></li>
                          <li><a href="#!">l</a></li>
                        </ul>

                        <ul class="color-list clearfix">
                          <li><a href="#!" class="color-1"></a></li>
                          <li><a href="#!" class="color-2"></a></li>
                          <li><a href="#!" class="active color-3"></a></li>
                          <li><a href="#!" class="color-4"></a></li>
                        </ul>

                      </div>
                      <p class="mb-30">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                      </p>
                      <div class="item-btns-group ul-li clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" class="add-to-cart">
                              <i class="flaticon-shopper"></i>
                              add to cart
                            </a>
                          </li>
                          <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                              <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- product-list-item - end -->
                </div>

              </div>
            </div>
            <!-- tab-content - end -->

            <!-- pagination-section - start -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination-section ul-li-right">
                <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-12" style="display: flex;
    align-items: center;">
                    <form action="#!">
                      <select class="filter-select storm-select">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Show 12</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </form>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="pagination-list">
                      <li><a class="active" href="#!">1</a></li>
                      <li><a href="#!">2</a></li>
                      <li><a href="#!">3</a></li>
                      <li><a href="#!">...</a></li>
                      <li><a href="#!">20</a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
            <!-- pagination-section - end -->

          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

