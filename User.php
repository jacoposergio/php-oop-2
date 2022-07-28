<?php

class User{
    public $name;
    public $discount = 0;
    public $account = 0;
    protected $cart = [];

    public function __construct($_name) {
        $this->name = $_name;
      }

      public function AddToCart($product_to_add) {
        $this->cart[] = $product_to_add;
      }
      
      // prodotti scelti 
      public function  getCart() {
        return $this-> cart;
      }

      public function totalPrice() {
        $sum=0;
        foreach($this->cart as $item){
          $sum += $item->price;
        }
        
        // Leviamo lo sconto 
        $sum -= $sum * $this->discount / 100;
        var_dump($sum);
      }

        public function makePayment() {
            $finalPrice = $this->totalPrice();
            
          if($this->account < $finalPrice) {
            die('Saldo non disponibile');
        } else {
            return 'ok';
        }
      }

}

?>