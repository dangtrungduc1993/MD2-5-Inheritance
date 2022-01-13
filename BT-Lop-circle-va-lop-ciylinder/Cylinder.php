<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight( $height): void
    {
        $this->height = $height;
    }


    public function calculateArea(): int|float
    {
        return parent::calculateArea() * 2 + 2 * pi() * $this->radius * $this->height;
    }

    public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }
    public function toString()
    {
        return parent::toString();
    }
}