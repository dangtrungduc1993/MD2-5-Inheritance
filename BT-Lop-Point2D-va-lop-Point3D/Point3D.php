<?php
include_once "Point2D.php";
class Point3D extends Point2D
{
    public float $z;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }

    public function getZ(): float
    {
        return $this->z;
    }

    public function setZ(float $z): void
    {
        $this->z = $z;
    }
    public function setXYZ(float $x,float $y,float $z): void
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ(): array
    {
        return [$this->x,$this->y,$this->z];
    }
    public function toString()
    {
        return "Day la hinh 3D";
    }


}