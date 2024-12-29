<?php
class myclass{
    public $name="Sagor onllys";
    public $age=25;

    public function myFuc($name="sagor", $age=25){
        return "This is name of $name and this is his age $age";

    }
}

$myclass = new myclass;
echo $myclass->myFuc("kamal ahmed", 65);