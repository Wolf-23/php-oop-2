<?php
require_once __DIR__ . '/Property.php';
class Rent extends Property {
    public $rentPrice;

    public function __construct($type, $propertyCode, $squareMeters, $rentPrice, $address, $postalCode, $city)
    {
        parent::__construct($type, $propertyCode, $squareMeters, $address, $postalCode, $city);
        $this->rentPrice = $rentPrice;
    }

    public function getPrice() {
        echo "<h4>Affitto mensile: " . $this->rentPrice . " €</h4>";
    }

}