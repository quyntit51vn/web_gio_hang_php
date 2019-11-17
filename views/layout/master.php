<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiki</title>


    <!-- Icon -->
    <link rel="icon" type="image/png" href=" ../../vendor/frontend/images/logo_red.png " sizes="32x32" />
    <!-- Css stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://kute-themes.com/html/edo/html/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="https://kute-themes.com/html/edo/html/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/fonts/Font-Awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://kute-themes.com/html/edo/html/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="https://kute-themes.com/html/edo/html/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="https://kute-themes.com/html/edo/html/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/global.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body style="position: relative">
    <!-- header -->
    <style>
        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            vertical-align: middle;
        }

        .flex-container>.my-flex {
            margin: 10px 0px;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
        }

        .my-flex a {
            display: inline-block !important;
        }

        .main-menu .navbar-nav>li>a {
            color: #46413e;
            font-family: 'Roboto';
        }

        .main-menu .navbar-nav>li:hover>a,
        .main-menu .navbar-nav>li>a:hover {
            color: #e9767e !important;
            font-family: 'Roboto';
        }

        .xx>li:hover a {
            color: #fff !important;
        }

        .block-megamenu-link>.link_container>a {
            color: #46413e;
            font-weight: bold;
        }

        .navbar-collapse>.fa-facebook-square {
            color: red;
        }

        .button-radius.view_more .icon:before,
        .button-radius .icon:before,
        .number_item_cart {
            background-color: #FF7E7E;
        }

        .face-insta>a:hover {
            background: none !important;
        }
    </style>
    <header id="header">
        <!-- Top bar -->
        <div class="top-bar">
            <div class="">
                <div class="">
                    <ul class="top-bar-link top-bar-link-right dot">

                        <li><a href="http://localhost/tiki/views/login.php">Sign in</a></li>
                        <li><a href="http://localhost/tiki/views/login.php">Sign up</a></li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- Top bar -->
        <div class="container" style="background-color: white">
            <!-- main header -->
            <div class="row">
                <div class="main-header">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                            <div class="logo text-center">
                                <a href="http://localhost/tiki/views/layout/master.php">
                                    <img src="../../vendor/frontend/images/logo_white.png" alt="Logo" style="height: 100px ; margin: -20px -10px">
                                    <h2 style="color: white; display: inline-block">Tiki</h2>
                                </a>
                            </div>
                        </div>
                        <div id="search_form" class="col-sm-6 col-md-7 col-lg-6 col-xs-12">
                            <button id="close_search_mobile" style="display: none;">
                                <i class="fa fa-times-circle-o"></i>
                            </button>
                            <div class="box-radius advanced-search">
                                <form class="form-inline" method="get" action="">
                                    <div class="form-group search-category">
                                        <select id="category-select" class="search-category-select" name="category">
                                            <option value="">All Categories</option>

                                            <option value="">Điện thoại - Máy tính bảng</option>
                                            <option value="">Điện tử - Điện lạnh</option>
                                            <option value="">Phụ kiện - Thiết bị số </option>
                                            <option value="">Xe máy - ô tô - xe đạp</option>
                                        </select>
                                    </div>
                                    <div class="form-group search-input">
                                        <input name="keyword" type="text" placeholder="What are you looking for?" value="">
                                    </div>
                                    <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2  col-sm-2 col-xs-12  left_bar_icon" style="justify-content: space-around; display: flex;">
                            <button type="button" id="open_bar_mobile" class="icon_bar_xs shopping_icon" style="display: none" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-bars"></i>
                            </button>
                            <button type="button" id="open_search_mobile" class="icon_bar_xs shopping_icon" style="display: none" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-search"></i>
                            </button>
                            <div class="block-wrap-cart ">
                                <div class="">
                                    <a href="" class="fa fa-shopping-cart shopping_icon not0">
                                    </a>
                                </div>
                                <div class="block-mini-cart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./main header -->
        </div>
    </header>
    <!-- end header -->

    <!-- Slider -->
    <div class="container">
        <div class="row home_Slider">
            <div class="row">

                <div class="col-sm-3 col-md-3 col-lg-3 top_category">
                    <div class="block block-category">
                        <div class="block-head">
                            <ul class="nav-tab">
                                <li><a> <span class="fa fa-bars"></span> MARKETS</a></li>
                            </ul>
                        </div>
                        <div class="block-inner">
                            <div class="tab-container">
                                <div id="tab-categories" class="tab-panel active">
                                    <ul class="home_categories">
                                        <!-- @foreach( array_slice($category_field,0,7) as $category ) -->
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-laptop"></i>
                                                <span>Điện thoại - Máy tính bảng</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Smartphone</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xiaomi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Samsung</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Oppo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Apple</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-mobile"></i>
                                                <span>Điện tử - Điện lạnh</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tivi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">máy giặt</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tủ lạnh</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xoong chảo</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-laptop"></i>
                                                <span>Điện thoại - Máy tính bảng</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Smartphone</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xiaomi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Samsung</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Oppo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Apple</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-mobile"></i>
                                                <span>Điện tử - Điện lạnh</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tivi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">máy giặt</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tủ lạnh</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xoong chảo</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-laptop"></i>
                                                <span>Điện thoại - Máy tính bảng</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Smartphone</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xiaomi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Samsung</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Oppo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Apple</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a class="dropdown-toggle" href="" title="">
                                                <i class="fa fa-mobile"></i>
                                                <span>Điện tử - Điện lạnh</span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tivi</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">máy giặt</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Tủ lạnh</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" style="vertical-align: middle; font-weight: bold;" title="">
                                                        <span class="text">Xoong chảo</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <!-- Home slide -->
                    <div class="block block-slider ">
                        <ul class="home-slider kt-bxslider">
                            <li>
                                <a href="">
                                    <img src="https://salt.tikicdn.com/cache/w584/ts/banner/1f/41/fc/760ad0751b6bf63e9ba4b84ecdc543e3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://salt.tikicdn.com/cache/w584/ts/banner/ff/c5/d2/641364653fb57905e34726bdb70fecb8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://salt.tikicdn.com/cache/w584/ts/banner/2d/be/7f/5f48891ffa61b08306e89ba3db502ff3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="https://salt.tikicdn.com/cache/w584/ts/banner/5b/3e/75/9e0774ecb969bda4cca8456232ab166d.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- ./Home slide -->
                </div>
            </div>
        </div>
    </div>

    <!-- ./Slider -->
    <div class="container">
        <?php
        $category_field = [
            [
                'id' => 1,
                'banner_name' => 'Thời trang',
                'ads_banner' => 'https://salt.tikicdn.com/cache/w885/ts/banner/4f/c5/6d/51c17d32763911ec9b9df75daed53e73.png',
                'name' => 'Thời trang',
                'image' => 'https://banner2.cleanpng.com/20180331/tze/kisspng-computer-icons-electronics-icon-design-symbol-electronics-5abfb3a2389f73.0693158515225128022319.jpg'
            ],
            [
                'id' => 2,
                'banner_name' => 'Điện tử',
                'ads_banner' => 'https://salt.tikicdn.com/cache/w885/ts/banner/06/7e/e0/07bacb27d8c4959c86f3f9133e9f5f9e.jpg',
                'name' => 'Điện tử',
                'image' => 'https://theme.hstatic.net/1000225975/1000415979/14/icon_menu_6_active.png?v=53'
            ],
            [
                'id' => 3,
                'banner_name' => 'make up',
                'ads_banner' => 'http://localhost/bigdeal/public/upload/image/category/27/banner-1538541170.jpg',
                'name' => 'make up',
                'image' => 'https://cdn2.iconfinder.com/data/icons/flat-cosmetic-symbols/91/Cosmetic_Flat_02-512.png'
            ]
        ];
        ?>
        <?php foreach ($category_field as $category) { ?>
            <div class="row" style="margin-top: 30px;" id="category_<?php echo $category['id'] ?>">
                <!-- block  host deals -->
                <?php if ($category['banner_name'] !== null) { ?>
                    <div class="text-center">
                        <a href="<?php echo  $category['ads_url']; ?>" style="width: 100%">
                            <img style="width: 100%;" src="<?php echo  $category['ads_banner']; ?>" alt="<?php echo  $category['name']; ?> ads banner">
                        </a>
                    </div>
                <?php } ?>
                <div class="block block-hot-deals">
                    <div class="block-head">
                        <div class="block-title">
                            <div>
                                <div>
                                    <img style="width: 48px;" src="<?php echo  $category['image']; ?>" alt="<?php echo $category['name']; ?> icon">
                                </div>
                                <span class="" style="display:block; color: #FF7E7E; font-weight: bold; text-align: center;"><?php echo $category['name']; ?></span>
                            </div>
                            <a class="button-radius view_more" href="" title="View all" style="color: #FF7E7E;">View all<span class="icon"></span></a>
                        </div>
                    </div>
                    <div class="block-inner">
                        <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <!-- product -->
                                <li class="product ">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="">
                                                    <img src="https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg" alt="Product"></a>
                                                <a href="" class="btn-quick-view">View</a>
                                            </div>
                                            <div class="product-status">
                                                <span class="sale" style="background-color: red ;">-30%</span>
                                            </div>
                                        </div>
                                        <div class=" product-right">
                                            <div class="product-name">
                                                <a title="View detail" href="">Đầu Sạc Micro USB Dodocool Cho Cáp Sạc Nam Châm Dodocool</a>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price" style="color: red;">
                                                    154.000
                                                    <span class="text-primary" style="font-size: 12px; color: red">VND</span>
                                                </span>
                                                <span class="product-price-old">
                                                    193.000
                                                    <span class="text-primary" style="font-size: 12px; color: grey">VND</span>
                                                </span>


                                            </div>
                                            <div style="overflow: auto">
                                                <div class="deal_c" style="color: #FF7E7E;">
                                                    <span>To 2019-12-31 15:59:00 </span>
                                                </div>
                                                <div class="sale_amourt is_active" title="Total 30 user has bought.If reach to , this deal will be approved">
                                                    <span>30</span>/<span>100</span>
                                                    <span class="fa fa-user"></span>
                                                </div>
                                            </div>
                                            <div class="product-button" style="padding: 2px;">
                                                <a class="button-radius btn-add-cart" href="" title="Add to Cart">Buy<span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <!-- end product -->
                        </ul>
                    </div>
                </div>
                <!-- ./block hot deals -->
            </div>
        <?php } ?>

    </div>
    <a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
    <script type="text/javascript" src="../../vendor/frontend/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../vendor/frontend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../vendor/frontend/bower_components/bxslider-4/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="../../vendor/frontend/js/owl_clone.min.js"></script>
    <script type="text/javascript" src="../../vendor/frontend/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- COUNTDOWN -->
    <script type="text/javascript" src="../../vendor/frontend/bower_components/jquery.countdown/jquery.plugin.min.js"></script>
    <script type="text/javascript" src="../../vendor/frontend/bower_components/jquery.countdown/jquery.countdown.min.js"></script>
    <!-- ./COUNTDOWN -->
    <script type="text/javascript" src="../../vendor/frontend/js/actual.min.js"></script>

    <script type="text/javascript" src="../../vendor/frontend/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $(".block-wrap-cart").hover(function() {
                $.get("<?php echo url(''); ?>/cart/view-mini-cart/1", function(data) {
                    $(".block-mini-cart").html(data);
                });
            }, function() {
                $(".block-mini-cart").html("");
            });
        });
    </script>
    <script>
        $(document).ready(function($) {
            // alert("xxxx");
            $(".link_container").hover(function() {
                var x = $(this).parents(".dropdown-menu").height();
                $(this).children('ul').css({
                    display: 'inline',
                    transform: 'translate(0,0)',
                    top: "-" + (parseInt($(this).attr("data-id")) * 100) + "%",
                    marginTop: "-" + (parseInt($(this).attr("data-id")) * 2) + "px",
                    height: x + "px",
                    opacity: "1",
                });
            }, function() {
                $(this).children('ul').css({
                    display: 'none',
                    opacity: "0",
                    transform: 'translate(0,40)'
                });
            });
        });
    </script>
</body>

</html>