<?php
require_once __DIR__ . '/Property.php';

class ForSale extends Property {
    public $sellPrice;

    public function __construct($type, $propertyCode, $squareMeters, $sellPrice, $address,  $postalCode, $city)
    {
        parent::__construct($type, $propertyCode, $squareMeters, $address, $postalCode, $city);
        $this->sellPrice = $sellPrice;
    }

    public function getPrice() {
        echo "<h4>Prezzo di Acquisto: " . $this->sellPrice . " €</h4>";
    }
}