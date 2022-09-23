<?php
require_once __DIR__ . '/Property.php';

class ForSale extends Property {
    public $sellPrice;

    public function __construct($type, $propertyCode, $squaremeters, $sellPrice, $address,  $postalCode, $city)
    {
        parent::__construct($type, $propertyCode, $squaremeters, $address, $postalCode, $city);
        $this->rentPrice = $sellPrice;
    }

    public function getPrice() {
        echo "<h4>Prezzo di Acquisto: " . $this->rentPrice . " €</h4>";
    }
}