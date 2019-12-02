<?php

session_start();
include_once('../model/db.php');
include_once('../model/product.php');
include_once('../model/cart.php');
if($_SESSION['user'] == null){
    header('Location: http://localhost/tiki/views/pages/login.php');
    return ;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $action = $_REQUEST['action'];
    $product_id = $_REQUEST['product_id'];
    $soluong = $_REQUEST['soluong'];
    if($action == 'addOrEdit'){
        $product = product::getProductById($product_id);
        $cart = new cart($product,$soluong);
        cart::addOrEdit($cart);
    }
    if($action == 'delete'){
        $product = product::getProductById($product_id);
        $cart = new cart($product,null);
        cart::delete($cart);
    }
    

    header('Location: '.$_SERVER['HTTP_REFERER']);
}
?>