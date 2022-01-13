<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle = new Circle(12,"yellow");
$cylinder = new Cylinder(12,"black",20);
echo $circle->toString() . "<br>" . "<br>";
echo $cylinder->toString() . "<br>";

