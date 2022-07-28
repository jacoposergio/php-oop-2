<?php

class Products {
      public $food;
      public $toy;
      public $house = 'kennel';
      public $clothes = 'no clothes';

      public function __construct($_food, $toy) {
        $this->food = $_food;
        $this->toy = $toy;
      }
      public function getInfo() {
        return "the pet feeds on $this->food, she plays with $this->toy, you can leave her in a $this->house, she wears $this->clothes";
      }
}

?>