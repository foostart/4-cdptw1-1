<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-1003">
  <div class="container">
    <div class="row">
      <div class="header">
        <h2>PHONES BY CATEGORIES</h2>
        <hr width="15%" align="left" color="red">
      </div>
      <div id="featured-section" class="featured-section sec-ptb-60 clearfix">
        <div class="featured-container">
          <div class="container">
            <ul class="nav digital-featured-nav nav nav-tabs">
              <li ><a class="active "data-toggle="tab" href="#featured">featured</a></li>
              <li><a data-toggle="tab" href="#best-seller">Best Seller</a></li>
            </ul>
          </div>

          <div class="tab-content">
<div id="featured" class="tab-pane fade in active show">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-item">
                      <div class="post-labels">
                        <ul class="clearfix">
                          <li class="bg-primary">new</li>
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

                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="product-item">
                    <div class="post-labels">
                      <ul class="clearfix">
                        <li class="bg-primary">new</li>
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
                      <a href="#!" class="item-title">Nokia 7.2</a>
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
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-item">
                  <div class="post-labels">
                    <ul class="clearfix">
                      <li class="bg-primary">new</li>
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
                    <a href="#!" class="item-title">Nokia 7.2</a>
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
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="product-item">
                <div class="post-labels">
                  <ul class="clearfix">
                    <li class="bg-primary">new</li>
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
                  <a href="#!" class="item-title">Nokia 7.2</a>
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
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-item">
              <div class="post-labels">
                <ul class="clearfix">
                  <li class="bg-primary">new</li>
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
                <a href="#!" class="item-title">Nokia 7.2</a>
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
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="product-item">
            <div class="post-labels">
              <ul class="clearfix">
                <li class="bg-primary">new</li>
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
              <a href="#!" class="item-title">Nokia 7.2</a>
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
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product-item">
          <div class="post-labels">
            <ul class="clearfix">
              <li class="bg-primary">new</li>
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
            <a href="#!" class="item-title">Nokia 7.2</a>
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
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product-item">
        <div class="post-labels">
          <ul class="clearfix">
            <li class="bg-primary">new</li>
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
          <a href="#!" class="item-title">Nokia 7.2</a>
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

</div>
</div>
</div>

            <div id="best-seller" class="tab-pane fade in ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-item">
                      <div class="post-labels">
                        <ul class="clearfix">
                          <li class="bg-primary">new</li>
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

                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="product-item">
                    <div class="post-labels">
                      <ul class="clearfix">
                        <li class="bg-primary">new</li>
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
                      <a href="#!" class="item-title">Nokia 7.2</a>
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
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-item">
                  <div class="post-labels">
                    <ul class="clearfix">
                      <li class="bg-primary">new</li>
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
                    <a href="#!" class="item-title">Nokia 7.2</a>
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
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="product-item">
                <div class="post-labels">
                  <ul class="clearfix">
                    <li class="bg-primary">new</li>
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
                  <a href="#!" class="item-title">Nokia 7.2</a>
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
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-item">
              <div class="post-labels">
                <ul class="clearfix">
                  <li class="bg-primary">new</li>
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
                <a href="#!" class="item-title">Nokia 7.2</a>
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
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="product-item">
            <div class="post-labels">
              <ul class="clearfix">
                <li class="bg-primary">new</li>
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
              <a href="#!" class="item-title">Nokia 7.2</a>
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
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product-item">
          <div class="post-labels">
            <ul class="clearfix">
              <li class="bg-primary">new</li>
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
            <a href="#!" class="item-title">Nokia 7.2</a>
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
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product-item">
        <div class="post-labels">
          <ul class="clearfix">
            <li class="bg-primary">new</li>
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
          <a href="#!" class="item-title">Nokia 7.2</a>
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

</div>
</div>
</div>




</div>
</div>
</div>
</div>
</div>
</div>