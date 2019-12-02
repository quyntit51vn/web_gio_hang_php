<?php
include_once('../layout/header.php');
include_once('../layout/banner-category.php');
include_once('../../model/category.php');
include_once('../../model/product.php');
?>
<div class="container">
    <?php
    
    $products = product::getListSearch($_REQUEST['category'],$_REQUEST['keyword']);
    ?>
    
    <div class="category-products tab-pane fade in active " id="row_gird">
        <?php if(count($products)){ ?>
        <ul class="products row">
            <?php foreach ($products as $product) { ?>

                <li class="product col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-container">
                        <div class="product-left">
                            <div class="product-thumb">
                                <a class="product-img" href="<?='http://localhost/tiki/views/pages/product_detail.php?product='.$product->id?>">

                                    <img src="<?= $product->images[0] ?>" alt="<?= $product->name ?>"></a>
                                <a href="" class="btn-quick-view">View</a>
                            </div>
                            <div class="product-status">
                                <span class="sale" style="background-color: red ;"><?= $product->deal ?>%</span>
                            </div>
                        </div>
                        <div class=" product-right">
                            <div class="product-name">
                                <a title="View detail" href="<?='http://localhost/tiki/views/pages/product_detail.php?product='.$product->id?>"><?= $product->name ?></a>
                            </div>
                            <div class="price-box">
                                <span class="product-price" style="color: red;">
                                    <?= number_format($product->price * (100 - $product->deal) / 100) ?>
                                    <span class="text-primary" style="font-size: 12px; color: red">VND</span>
                                </span>
                                <span class="product-price-old">
                                    <?= number_format($product->price) ?>
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
                                <a class="button-radius btn-add-cart" href="<?='http://localhost/tiki/views/pages/product_detail.php?product='.$product->id?>" title="Add to Cart">Buy<span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>
        <?php }else{ ?>
        <div style="clear: both; "></div>
        <div style="width: 100%; background-color: white;  padding: 40px; margin-top: 10px;">
            <img src="http://localhost/tiki/upload/empty.jpg" style="width: 50%; margin-left:25%; margin-top: 30px;" alt="">
        </div>
        <?php } ?>
    </div>
</div>
<?php
include_once('../layout/footer.php');
?>