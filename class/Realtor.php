<?php

require_once __DIR__ . '/User.php';

class Realtor extends User{

    public $realtorCode;

    public function __construct($email, $password, $realtorCode)
    {
        parent::__construct($email, $password);
        $this->realtorCode = $realtorCode;
    }
}