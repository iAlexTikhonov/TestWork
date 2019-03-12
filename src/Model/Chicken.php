<?php

namespace TestWork\Model;


class Chicken extends Animal
{
    public $eggs;

    public function __construct()
    {
        parent::__construct();
        $this->eggs = mt_rand(0, 1);
    }

    public function getEggs(){

        return $this->eggs;
    }
}