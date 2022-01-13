<?php

class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $x, float $y,float $xSpeed, float $ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(): array
    {
        return [$this->xSpeed,$this->ySpeed];
    }
    public function move(): array
    {
        return [$this->x + $this->xSpeed, $this->y + $this->ySpeed];
    }
    public function toString()
    {
        return "Doi tuong Point sau khi di chuyen  co toa do la : " ;
    }




}