<?php
// 多态
interface Ispeed
{
    function fast();
    function cruise();
    function slow();
}

class Jet implements Ispeed
{
    function slow()
    {
        return 120;
    }

    function cruise()
    {
        return 1200;
    }
    
    function fast()
    {
        return 1500;
    }
}

class Car implements Ispeed
{
    function slow()
    {
        $carSlow = 15;
        return $carSlow;
    }
    
    function cruise()
    {
        $carCruise = 65;
        return $carCruise;
    }

    function fast()
    {
        $carZoom = 110;
        return $carZoom;
    }
}

$jet = new Jet();
$jetSlow = $jet->slow();
$jetCurise = $jet->cruise();
$jetFast = $jet->fast();

$str = "喷气发动机最低速度 ：$jetSlow<br />";
echo  $str;

$car = new Car();
$carSlow = $car->slow();
$carCruise = $car->cruise();
$carFast = $car->fast();

$str = "小汽车的最低速度为 ：$carSlow";
echo $str;