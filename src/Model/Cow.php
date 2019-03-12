<?php

namespace TestWork\Model;


class Cow extends Animal
{
    public $milk;

    public function __construct()
    {
        parent::__construct();
        $this->milk = mt_rand(8, 12);
    }

    public function getMilk(){

        return $this->milk;
    }
}

