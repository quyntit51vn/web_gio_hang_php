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
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/global.css?<?= date('l jS \of F Y h:i:s A') ?>" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/style.css?<?= date('l jS \of F Y h:i:s A') ?>" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/responsive.css?<?= date('l jS \of F Y h:i:s A') ?>" />
    <link rel="stylesheet" type="text/css" href="../../vendor/frontend/css/custom.css?<?= date('l jS \of F Y h:i:s A') ?>" />
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
    <?php
    include_once('../../model/db.php');
    include_once('../../model/category.php');
    include_once('../../model/user.php');
    include_once('../../model/cart.php');
    session_start();
    // unserialize
    $user = $_SESSION['user'];
    ?>

    <header id="header">
        <!-- Top bar -->
        <div class="top-bar">
            <div class="">
                <div class="">
                    <ul class="top-bar-link top-bar-link-right dot">
                        <?php if (!$user) { ?>
                            <li><a href="http://localhost/tiki/views/pages/login.php">Sign in</a></li>
                            <li><a href="http://localhost/tiki/views/pages/login.php">Sign up</a></li>
                        <?php
                        } else {
                            $user = unserialize($user);
                            ?>
                            <li>
                                <a href="">Hi <?= $user->fullName; ?></a>

                            </li>
                            <li class="dropdown-item">
                                <form method="post" action="http://localhost/tiki/controller/user.php">
                                    <input type="hidden" name="action" value="logout">
                                    <button type="submit"> logout</button>
                                </form>
                            </li>
                        <?php } ?>
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
                                <a href="http://localhost/tiki/views/pages/home.php">
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
                                <form class="form-inline" method="get" action="http://localhost/tiki/views/pages/search.php">
                                    <div class="form-group search-category">
                                        <?php $list_categories = category::getList();?>
                                        <select id="category-select" class="search-category-select" name="category">
                                            <option value="all">All category</option>
                                            <?php foreach($list_categories as $value){ ?>
                                            <option value="<?= $value->id?>"><?=$value->name?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group search-input">
                                        <input name="keyword" type="text" placeholder="What are you looking for?" value="<?=$_REQUEST['keyword']?>">
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
                                    <a href="http://localhost/tiki/views/pages/cart.php" class="fa fa-shopping-cart shopping_icon not0">
                                        <?php if(count(cart::getList())){?>
                                        <div style="width: 15px;
                                            height: 15px;
                                            border-radius: 50%;
                                            color: #fff;
                                            font-size: 15px;
                                            background: red;
                                            text-align: center;
                                            line-height: 15px;
                                            top: -5px;
                                            position: absolute;
                                            right: -6px;">
                                            <?php 
                                                echo count(cart::getList());
                                            ?>
                                        </div>
                                        <?php }?>
                                    </a>
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