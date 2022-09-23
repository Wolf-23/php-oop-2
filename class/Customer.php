<?php

require_once __DIR__ . '/User.php';

class Customer extends User{

    public $customerId;

    public function __construct($name, $lastaname, $email, $password, $address, $postalCode, $city, $customerId)
    {
        parent::__construct($name, $lastaname, $email, $password, $address, $postalCode, $city);
        $this->customerId = $customerId;
    }
}