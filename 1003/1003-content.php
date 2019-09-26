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
      <div class="products-tab">
        <ul class="nav nav-tabs products-tab-header" id="myTab">
          <li class="active"><a href="#home">All products</a></li>
          <li><a href="#profile">Accessories</a></li>
          <li><a href="#messages">Carrier Phones</a></li>
          <li><a href="#settings">Cases</a></li>
          <li><a href="#profile">Exclusive Phones</a></li>
          <li><a href="#messages">Unlocked Phones</a></li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <div class="row">
              <div class="col-md-3">
                <div class=" product-item">
                  <div class="image-container mb-20">
                    <a href="#">
                      <div class="product-Image">
                        <img src="http://<?php echo $url_path ?>/images/3.jpg">
                      </div>
                    </a>  
                  </div>
                  <div class="content-container">
                    <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                    <div class="product-price mb-20">
                      <del class="price-compare">$560.00</del>
                      <span class="price-sale">$500</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class=" product-item">
                  <div class="image-container mb-20">
                    <a href="#">
                      <div class="product-Image">
                        <img src="http://<?php echo $url_path ?>/images/1.jpg">
                      </div>
                    </a>  
                  </div>
                  <div class="content-container">
                    <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                    <div class="product-price mb-20">
                      <del class="price-compare">$560.00</del>
                      <span class="price-sale">$500</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class=" product-item">
                  <div class="image-container mb-20">
                    <a href="#">
                      <div class="product-Image">
                        <img src="http://<?php echo $url_path ?>/images/4.jpg">
                      </div>
                    </a>  
                  </div>
                  <div class="content-container">
                    <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                    <div class="product-price mb-20">
                      <del class="price-compare">$560.00</del>
                      <span class="price-sale">$500</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class=" product-item">
                  <div class="image-container mb-20">
                    <a href="#">
                      <div class="product-Image">
                        <img src="http://<?php echo $url_path ?>/images/2.jpg">
                      </div>
                    </a>  
                  </div>
                  <div class="content-container">
                    <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                    <div class="product-price mb-20">
                      <del class="price-compare">$560.00</del>
                      <span class="price-sale">$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="profile">
            <div class="row">
             <div class="col-md-3">
              <div class=" product-item">
                <div class="image-container mb-20">
                  <a href="#">
                    <div class="product-Image">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg">
                    </div>
                  </a>  
                </div>
                <div class="content-container">
                  <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                  <div class="product-price mb-20">
                    <del class="price-compare">$560.00</del>
                    <span class="price-sale">$500</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class=" product-item">
                <div class="image-container mb-20">
                  <a href="#">
                    <div class="product-Image">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg">
                    </div>
                  </a>  
                </div>
                <div class="content-container">
                  <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                  <div class="product-price mb-20">
                    <del class="price-compare">$560.00</del>
                    <span class="price-sale">$500</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class=" product-item">
                <div class="image-container mb-20">
                  <a href="#">
                    <div class="product-Image">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg">
                    </div>
                  </a>  
                </div>
                <div class="content-container">
                  <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                  <div class="product-price mb-20">
                    <del class="price-compare">$560.00</del>
                    <span class="price-sale">$500</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class=" product-item">
                <div class="image-container mb-20">
                  <a href="#">
                    <div class="product-Image">
                      <img src="http://<?php echo $url_path ?>/images/1.jpg">
                    </div>
                  </a>  
                </div>
                <div class="content-container">
                  <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                  <div class="product-price mb-20">
                    <del class="price-compare">$560.00</del>
                    <span class="price-sale">$500</span>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="tab-pane" id="messages">
          <div class="row">
           <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="settings">
        <div class="row">
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="messages">
        <div class="row">
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="messages">
        <div class="row">
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class=" product-item">
              <div class="image-container mb-20">
                <a href="#">
                  <div class="product-Image">
                    <img src="http://<?php echo $url_path ?>/images/1.jpg">
                  </div>
                </a>  
              </div>
              <div class="content-container">
                <div class="product-title mb-20">APPLE IPHONE 6S PLUS</div>
                <div class="product-price mb-20">
                  <del class="price-compare">$560.00</del>
                  <span class="price-sale">$500</span>
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