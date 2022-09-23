<?php

require_once __DIR__ . '/User.php';

class Customers extends User{

    public $customersId;

    public function __construct($email, $password, $customersId)
    {
        parent::__construct($email, $password);
        $this->customersId = $customersId;
    }
}