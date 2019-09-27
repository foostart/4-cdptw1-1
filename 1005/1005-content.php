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
        <!--HERDER-->
         <div class="row">
        <section id="demos">
                <div class="chu1 columns">
                    <div class="chu2">
                        <span class="bran">BRANDS</span>
                        <div class="gach-ngang"></div>
                    </div>
                </div>
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">   
                       <div class="item">
                        <h5 class="chu">3DOCEAN</h5>

                    </div>
                    <div class="item">
                        <h5 class="chu">3DOCEAN</h5>

                    </div>
                    <div class="item">
                        <h5 class="chu">ACTIVEDEN</h5>
                    </div>

                    <div class="item">
                        <h5 class="chu">AUDIOJUNGLE</h5>
                    </div>

                    <div class="item">
                        <h5 class="chu">CODECANYON</h5>
                    </div>

                    <div class="item">
                        <h5 class="chu">PHOTODUNE</h5>
                    </div>
                    <div class="item">
                        <h5 class="chu">THEMEFOREST</h5>
                    </div>
                    <div class="item">
                        <h5 class="chu">VIDEOHIVE</h5>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        var owl = $('.owl-carousel');
                        owl.owlCarousel({
                            margin: 10,
                            nav: true,
                            loop: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 3
                                },
                                1000: {
                                    items: 5
                                }
                            }
                        })
                    })
                </script>
            </div>  
    </section>
</div>
</div>

