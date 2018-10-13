<?php
$x=666;
echo "<br>";
var_dump($x);
$string = "aaaaa";
var_dump($string);
echo ("<br>");
$z=true;
$book = array('中国',"美国");
var_dump($book);
class Car {
    var $color;
    function Car($color="111"){
        $this->color=$color;
    }
    function what_color(){
        return $this->color;
    }
}
 $trak = new Car();

