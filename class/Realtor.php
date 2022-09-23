<?php

require_once __DIR__ . '/User.php';

class Realtor extends User{

    public $realtorCode;

    public function __construct($name, $lastaname, $email, $password ,$address, $postalCode, $city, $realtorCode)
    {
        parent::__construct($name, $lastaname, $email, $password, $address, $postalCode, $city);
        $this->realtorCode = $realtorCode;
    }
}