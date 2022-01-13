<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(4,5);
$point3D = new Point3D(6,7,8);

$point2D->setXY(8,9) . "<br>";
print_r($point2D->getXY())  . "<br>";
echo $point2D->toString() . "<br>" . "<br>";

$point3D->setXYZ(8,9,10) . "<br>";
print_r($point3D->getXYZ())  . "<br>";
echo $point3D->toString();

