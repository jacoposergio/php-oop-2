<?php

class Utente{
    public $name;
    public $discount = 'unregistered';
    public $account = 0;

    public function __construct($_name) {
        $this->name = $_name;
      }
}

?>