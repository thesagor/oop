<?php
class varmy{
    public $school= "gvt scool";
    public $color;
    public $brand;
    public $name="karim";
    public function car($brand, $color ){
    return "$brand is the best color of car and the $color is top notch";

    }
}


$myvar= new varmy;
$myvar->color="red";
echo $myvar->color;

