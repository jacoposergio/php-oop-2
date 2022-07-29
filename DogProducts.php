<?php

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/NewTrait.php';

class DogProducts extends Products {

        use NewTrait;

        // override
        public $clothes = 'cape';
         // override
         public $price = '100';

}

?>