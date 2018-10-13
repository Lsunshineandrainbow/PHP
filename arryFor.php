<?php
$str="i love china";
print ($str);
echo '字符串长度'.strlen($str);
echo "<br>";
echo "定义常量";
define("WEL",3,false);
echo WEL;
print ('<br>');
$x=1.2;
$y=1;
$z='sss';
echo 1.2," --",1;
var_dump($x==$y);
var_dump($x===$y);
echo 1.2,"-- ",'sss','   ';
var_dump($x==$z);
echo '<br>';
$arr1 = array('六','起','巴');
foreach ($arr1 as $index=>$value){
echo $value,$index;
}

