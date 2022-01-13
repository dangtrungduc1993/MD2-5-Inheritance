<?php
include "Point.php";
include "MoveablePoint.php";

$point = new Point(5,5);
print_r($point->setXY(6,6));
echo $point->toString();
print_r($point->getXY()) ;
echo "<br>";


$moveablePoint = new MoveablePoint(6,6,2,4);
echo $moveablePoint->toString();
print_r($moveablePoint->move());


