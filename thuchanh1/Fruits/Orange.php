<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

abstract class Orange extends  Fruits{
    public function howToEat()
    {
        return "tao ep";
    }
}