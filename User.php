<?php

class User{
    public $name;
    public $discount = '0';
    public $account = 0;
    protected $cart = [];

    public function __construct($_name) {
        $this->name = $_name;
      }

      public function AddToCart($product_to_add) {
        $this->cart[] = $product_to_add;
      }
}

?>