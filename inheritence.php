<?php
class Mother{
    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother{


}

(new Child)->getEyeCount();

?>


<?php

abstract class Shape{

    protected $color;
    public function __construct($color="red") {

        $this->color = $color;
    }

    public function getColor() {
        return $this->color; 
    }

}

class Square extends Shape{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }

}

class Triangle extends Shape {
    protected $base = 4;

    protected $height = 5;

    public function getArea(){
        return .5 * $this->base * $this->height;

    }

}


echo (new Triangle)->getArea();
echo " ";
echo (new Square)->getArea();

echo " ";

echo (new Square)->getColor();

?>