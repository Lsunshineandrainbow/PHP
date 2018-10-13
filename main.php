<?php
 $x=5;
function myTest(){
    $y = 10;
   static $x;
    echo $x;
//    echo $y;
    $x++;
}
myTest();
myTest();
myTest();
