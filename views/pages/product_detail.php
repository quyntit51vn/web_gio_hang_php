<?php
include_once('../layout/header.php');
include_once('../../model/category.php');
include_once('../../model/product.php');
if (isset($_REQUEST['product']) || $_REQUEST['product'] == null)
    header('Location: http://localhost/tiki/views/pages/home.php');
$product = product::getProductById($_REQUEST['product']);
if ($product == null) {
    header('Location: http://localhost/tiki/views/pages/home.php');
}

?>
<style>
    .modal {
        display: none;
        z-index: 100;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }

    #id02 .nen {
        width: 100vw;
        height: 100vh;
        background-color: #999999;
        opacity: 0.5;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #000000ab;
        width: 25vw;
        padding: 50px 0px 10px 0px;
        z-index: 101;
        margin: 35vh auto;
        border: none;
    }

    #id02 .modal-content {
        padding: 10px;
        background-color: #fff;
        position: fixed;
        width: 40%;
        top: 0px;
        left: 30%;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .quantity_product {

        background-color: #fff;
        width: 70px !important;
        text-align: center;
    }

    .btn-minus {
        margin: -60px 0px 0px -30px;
    }

    .btn-plus {
        margin: -60px 0px 0px 57px;

        .description>.title {
            margin-top: 10px;
            background-color: #0BCCC8;
            color: #fff;
            padding: 10px;
            font-size: 24px;
        }
</style>
<div class="container product-page">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href="http://localhost/tiki/views/pages/home.php"><i class="fa fa-home"></i></a>
                </li>
                <li><a class="active"><?= $product->name ?></a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-sm-6">
                <div class="block block-product-image" style="background-color: #fff;">
                    <div class="product-image easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="<?= $product->images[0] ?>">
                            <img src="<?= $product->images[0] ?>" alt="Product" width="450" height="450" />
                        </a>
                    </div>
                    <div class="product-list-thumb">
                        <ul class="thumbnails kt-owl-carousel" data-margin="10" data-nav="true" data-responsive='{"0":{"items":2},"600":{"items":2},"1000":{"items":3}}'>
                            <li><a href="<?= $product->images[0] ?>" data-standard="<?= $product->images[0] ?>">
                                    <img src="<?= $product->images[0] ?>" alt="" />
                                </a></li>
                            <?php foreach ($product->images as $key => $image) { ?>
                                <li>

                                    <a class="<?php if ($key == 0) echo 'selected' ?>" href="<?= $image ?>" data-standard="<?= $image ?>">
                                        <img src="<?= $image ?>" alt="" />
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="">
                    <div class="col-sm-12 ">
                        <div class="block-product-info">
                            <h3 class="product-name"><?= $product->name ?></h3>
                            <div class="price-box product_details" style="overflow: hidden; margin-top: 20px">

                                <span class="product-price" style="color: red;"> Deal Price : <?= number_format($product->price * (100 - $product->deal) / 100) ?>
                                    <span class="text-primary" style="font-size: 12px; color: red;"></span></span>
                                <span class="product-price-old"> Old Price : <?= number_format($product->price) ?>
                                    <span class="text-primary" style="font-size: 12px; color: grey"></span>
                                </span>
                                <span class="text-danger badge" style="background-color: forestgreen;"> -<?= $product->deal ?>% </span>
                            </div>
                            <form action="http://localhost/tiki/controller/giohang.php" method="post">    
                                <div style="margin: 10px 0px -20px 35px;">
                                    <input type="hidden" name="product_id" value="<?=$product->id?>">
                                    <input type="hidden" name="action" value="addOrEdit">
                                    <input type="number" name="soluong" class="quantity_product" readonly="true" min=1 max=5 value="1">
                                    <button type="button" class="btn btn-info btn-minus"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-info btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="variations-box">
                                    <table class="variations-table">
                                        <tr>
                                            <td class="table-value">
                                                <button type="submit" class="button-radius btn-add-cart" id="add-cart">Add to cart<span class="icon"></span></button>
                                                <div id="id01" class="modal">
                                                    <div class="modal-content">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>    
                        </div>
                    </div>

                </div>
                <div>
                    <!-- Product tab -->
                    <div class="block block-tabs tab-left">
                        <div class="block-head">
                            <ul class="nav-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Information</a></li>
                            </ul>
                        </div>
                        <div class="block-inner">
                            <div class="tab-container">
                                <div id="tab-2" class="tab-panel ">
                                    <div style="max-height: 250px; overflow: auto;">
                                        <?php echo $product->description; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Product tab -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="block block-products-owl">
            <div class="block-head" style="background-color: #0BCCC8;color: #fff;">
                <div class="block-title">
                    <div class="block-title-text text-lg" style="color: #fff;">Description</div>
                </div>
            </div>
            <div class="block-inner">
                <?php echo $product->description; ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once('../layout/footer.php');
?>