<?php

namespace TestWork\Model;

class Farm{

    public static $cowPen = [];
    public static $chickenPen = [];

    public static function addCow(){
        $cow = new Cow();
        self::$cowPen[] = $cow->getMilk();

        return $cow;
    }

    public static function addChicken(){
        $chicken = new Chicken();
        self::$chickenPen[] = $chicken->getEggs();

        return $chicken;
    }

    public static function collectMilk(){
        $res = array_sum(self::$cowPen);

        return $res;
    }

    public static function collectEggs(){
        $res = array_sum(self::$chickenPen);

        return $res;
    }
}