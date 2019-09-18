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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripst.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-21">
            <div class="container">
                <!--HERDER-->
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">  
                        <!--NAV-->
                        <ul class="nav nav-tabs">

                            <li class="orderby"><select name="orderby" class="slect" >
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select></li>

                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>

                        </ul>
                        <div class="clearfix"></div>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/1.jpg" data-src="images/2.jpg"></a>
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

                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/7.jpg" data-src="images/2.jpg"></a>
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
                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/3.jpg" data-src="images/2.jpg"></a>
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
                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/1.jpg" data-src="images/2.jpg"></a>
                                        <div class="chu2">
                                            <a href="#" class="chu1">LG OPTIMUS ZONE</a><br>
                                            <strong class="gia"> £456.00</strong>
                                            <div class="clearfix"></div>
                                            <div class="icon-fa">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/4.jpg" data-src="images/2.jpg"></a>
                                        <div class="chu2">
                                            <a href="#" class="chu1">MOTO G PLUS (4TH GEN.)</a><br>
                                            <strong class="gia"> £456.00</strong>
                                            <div class="clearfix"></div>
                                            <div class="icon-fa">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 protducts">
                                    <div class="item">
                                        <a href="#"><img src="images/6.jpg" data-src="images/2.jpg"></a>
                                        <div class="chu2">
                                            <a href="#" class="chu1">APPLE IPHONE 6S PLUS</a><br>
                                            <del>£600.00 </del> <strong class="gia"> £456.00</strong>
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
                                <div class="clearfix b--grid row">  
                                    <div class="pagination-container">
                                        <nav class="pagination-full clearfix">
                                            <ul class="pagination">
                                                <li> <span class="page-numbers current">1</span></li>
                                                <li> <a class="page-numbers" href="">2</a></li>
                                            </ul>
                                            <ul class="pagination pagination-add">
                                                <li> <a href="">Next</a></li>            
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">

                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/1.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review    </a></span>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/7.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review  </a></span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/3.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review    </a></span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/1.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review    </a></span>

                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/4.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review    </a></span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#"><img src="images/6.jpg" data-src="images/2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-8 lesge">
                                <div class="item">
                                    <div class="col-md-6">
                                        <h4>APPLE IPHONE 6S PLUS</h4>
                                        <span>2Review(s)|<a href="#">Add Your Review    </a></span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="item">
                                        <span class="pri">Price</span><br>
                                        <del>£600.00</del><span class="money">£560.00</span>
                                        <br>
                                        <p class="chu4">Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        <div class="icon-fax">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            <i class="fa fa-shopping-bag" aria-hidden="true"> ADD TO CARD</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

    </body>
</html>