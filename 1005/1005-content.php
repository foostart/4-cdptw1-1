<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/docs.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-23">

            <div class="container">
                <!--HERDER-->

                <section id="demos">
                    <div class="row">
                        <div class="chu1">
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
                    </div>
                </section>
            </div>
        </div>
    </body>
    <script src="js/highlight.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>    
</html>
