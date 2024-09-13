<?php

abstract class Shape
{
    public $color;

    abstract public function getArea(): float;

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    public function getArea(): float
}

class Circle extends Shape
{
    public function getArea(): float
    {
        // code to calculate and return the area of the triangle
    }
}

class Rectangle extends Shape
{
    public function getArea(): float
    {
        // code to calculate and return the area of the triangle
    }
}