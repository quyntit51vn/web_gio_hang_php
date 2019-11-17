

    <?php 
        include_once('../layout/header.php');
        include_once('../layout/banner-category.php');
    ?>
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
    <?php 
        include_once('../layout/footer.php');
    ?>
    