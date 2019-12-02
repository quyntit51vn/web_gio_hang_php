<?php
session_start();
if($_SESSION['user'] == null){
    header('Location: http://localhost/tiki/views/pages/login.php');
}
include_once('../layout/header.php');
include_once('../../model/category.php');
include_once('../../model/product.php');
include_once('../../model/cart.php');
$products = cart::getList();

?>
<div class="container">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href=""><i class="fa fa-home"></i></a>
                    <span></span>
                </li>
                <li>Cart</li>
            </ul>
        </div>
        <div class="main-page main-cart">
            <style>
                .modal {
                    display: none;
                    z-index: 100;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
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

                input[type=number]::-webkit-inner-spin-button,
                input[type=number]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                }

                .quantity_product {
                    height: 25px !important;
                    background-color: #fff;
                    width: 50px !important;
                    text-align: center;
                }

                .btn-minus {
                    font-size: 10px;
                    height: 25px;
                    margin: -52px 0px 0px -38px;
                }

                .btn-plus {
                    font-size: 10px;
                    height: 25px;
                    margin: -52px 0px 0px 55px;
                }
            </style>

            <h1 class="page-title">Shopping Cart Summary</h1>
            <div class="page-content page-order">
                <?php if(!empty($products) && count($products)){ ?>
                <div id="product_message" class="heading-counter warning" style="background: #fff">Your shopping cart contains:
                    <span><?=count($products) ?> Product</span>
                </div>
                <?php }else{ ?>
                <div style="width: 100%; background-color: white;  padding: 40px;">
                    <img src="http://localhost/tiki/upload/empty.jpg" style="width: 50%; margin-left:25%; margin-top: 30px;" alt="">
                </div>
                <?php }?>
                <div class="order-detail-content" style="background: #ffffff">
                    <?php if(!empty($products) && count($products) > 0){ ?>
                    <table class="cart_summary">
                        <thead>
                            <tr>
                                <th class="cart_product">Product</th>
                                <th style="width: 43%;">Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sum</th>
                                <th class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $total = 0; 
                                foreach($products as $product){
                            ?>
                            <?php $total += $product->soluong * $product->product->price * (100 - $product->product->deal)/100; ?>
                            <tr style="min-height: 20px;vertical-align: middle;">
                                <td class="cart_product">
                                    <a href="<?='http://localhost/tiki/views/pages/product_detail.php?product='.$product->product->id?>">
                                        <img class="img-responsive" src="<?=$product->product->images[0]?>" alt="Product">
                                    </a>
                                </td>
                                <td class="cart_description" style="max-height: 200px; display: block; overflow: auto;">
                                    <p class="product-name"><a href="<?='http://localhost/tiki/views/pages/product_detail.php?product='.$product->product->id?>"><?= $product->product->name ?></a></p>
                                    <small class="cart_ref"><?= $product->product->description ?></small><br>
                                </td>
                               
                                <td class="price" style="text-align: center;">
                                    <?php echo number_format($product->product->price * (100 - $product->product->deal)/100) ?>
                                </td>
                                <td class="quantity" data-id="<?=$product->product->id?>" style="text-align: center;">
                                    <form action="http://localhost/tiki/controller/giohang.php" method="post">
                                        <input type="hidden" name="action" value="addOrEdit">
                                        <input type="hidden" name="product_id" value="<?=$product->product->id?>">
                                        <input type="number" name="soluong" min=1 value="<?=$product->soluong;?>">
                                        <button type="submit">save</button>
                                    </form>
                                </td>
                                <td class="price" style="text-align: center; color: #10bfbb;font-weight: bold;">
                                    <?php echo number_format($product->soluong * $product->product->price * (100 - $product->product->deal)/100); ?>
                                </td>
                                <td class="cart_avail" style="font-size: 20px; color: red;">
                                    <form method="post" action="http://localhost/tiki/controller/giohang.php" >
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="product_id" value="<?=$product->product->id?>"> 
                                        <button type="submit" ><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><strong>
                                        <h3>Total</h3>
                                    </strong></td>
                                <td colspan="4" style="color: #0C9F9C;"><strong id="total">
                                        <h3><?= number_format($total) ?></h3>
                                    </strong> </td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include_once('../layout/footer.php');
?>