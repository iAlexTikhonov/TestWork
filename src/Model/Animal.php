<?php

namespace TestWork\Model;


class Animal
{
    protected $number;

    public function __construct()
    {
       $this->number = mt_rand(0, time() * 3600 * 24 * 7);
    }

    public function getRegisterNumber(){

        return $this->number;
    }
}





