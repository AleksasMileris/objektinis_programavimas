<?php
require_once "point.php";


$cord=new Point(2,2);
$cordP= new Point(5,5);
//$cord->setX(2);
//$cord->setY(2);
echo $cord;
echo "<hr>";
echo $cord->distanceFromOrigin();
echo "<hr>";
echo $cord->push(1,2);
echo "<hr>";
echo $cord;
echo "<hr>";
echo $cord->distance($cordP);
echo "<hr>";
$cord->change(3,3);
echo $cord;


?>

