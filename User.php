<?php

class User{
    public $name;
    public $discount = 0;
    public $account = 0;
    protected $cart = [];

    public function __construct($_name) {
        $this->name = $_name;
      }

      public function AddToCart($product) {
        $this->cart[] = $product;
      }
      
      // prodotti scelti 
      public function  getCart() {
        return $this-> cart;
      }

      public function totalPrice() {
        $sum = 0;
        foreach($this->cart as $product){
          $sum += $product->price;
          // var_dump($product->price);
        }
        // var_dump($totalPrice);
        
        // Leviamo lo sconto 
        $sum -= $sum * $this->discount / 100;
        // var_dump($sum);
        return $sum;
      }
      // var_dump($this->totalPrice());

        public function makePayment() {
            $finalPrice = $this->totalPrice();
            // var_dump($this->totalPrice());
            // var_dump($this->account);
            
        //   if($this->account < $finalPrice) {
        //     die('Saldo non disponibile');
        // } else {
        //     return 'ok';
        // }
          if($this->account < $finalPrice) {
             throw new Exception("Utente: $this->name: Saldo non disponibile");
        } else {
            return 'ok';
        }
      }

}

?>