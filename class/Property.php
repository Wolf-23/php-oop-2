<?php
require_once __DIR__ . '/../trait/Location.php';

class Property {
    use Location;
    public $type;
    public $propertyCode;
    public $squareMeters;

    public function __construct($type, $propertyCode, $squareMeters, $address, $postalCode, $city)
    {
        $this->type = $type;
        $this->propertyCode = $propertyCode;
        $this->squareMeters = $squareMeters;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }

    public function getPropertyInfo() {
        echo '<h3>' . $this->type . ' di ' . $this->squareMeters . ' metri quadrati</h3>';
        echo '<h3> Appartiene alla categoria: ' . $this->propertyCode . '</h3>';
        echo "<h4>L'appartamento si trova in " . $this->address . ' ' . $this->city . ' ' . $this->postalCode .'</h4>';
    }

}