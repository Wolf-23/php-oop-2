<?php
require_once __DIR__ . '/../trait/Location.php';
class User {
    use Location;
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct($name, $lastname, $email, $password, $address, $postalCode, $city)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }

    public function getInformation() {
        echo '<h3>' . $this->name . ' ' . $this->lastname .'</h3>';
        echo '<h4>' . $this->address . ' ' . $this->city . ' ' . $this->postalCode .'</h4>';
    }
}