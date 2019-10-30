<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
  <div class="container">
    <div class="row">
      <div class="brand-section">
      <div class="col-md-2">
        <div class="brand-title">
           <h2>BRANDS</h2>
         <span>Giving quality trust</span>
         <p>Cooperate with many famous brands.</p>
       </div>
     </div>
     <div class="col-md-10">
      <div class="brand-content">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-11.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-9.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-12.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-14.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"> <img src="http://<?php echo $url_path ?>/images/logo-11.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-15.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-12.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-11.png" alt="image_not_found"></a>

            </div>
            <div class="swiper-slide">
              <a href="#!"><img src="http://<?php echo $url_path ?>/images/logo-17.png" alt="image_not_found"></a>

            </div>
            <!-- Add Arrows -->

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

