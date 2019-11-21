
<?php

// require 'db.php';

class cart {

    var $product;
    var $soluong;
    public function __construct($product,$soluong)
    {
        $this->product = $product;
        $this->soluong = $soluong;
    }

    static function getList(){
        $carts = unserialize($_SESSION['cart']);
        return $carts;
    }

    static function addOrEdit($cart){
        session_start();
        $list = cart::getList();
        $list[$cart->product->id] = $cart;
        $_SESSION['cart'] = serialize($list);
    }

    static function delete($cart){
        session_start();
        $list = cart::getList();
        unset($list[$cart->product->id]);
        $_SESSION['cart'] = serialize($list);
    }

}