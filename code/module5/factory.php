<?php

class Car
{
    /**
     * @var string
     */
    protected $make;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $color;


    public function __construct($make, $model, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
    }
}

class ToyotaCorolla extends Car
{
}

class ToyotaCamry extends Car
{
}

class ToyotaCrx extends Car
{
}

class HondaCivic extends Car
{
}


class CarFactory
{
    public static function getCar($make, $model, $color)
    {
        $make = ucfirst($make);
        $model = ucfirst($model);

        $className = $make . $model;

        if (!class_exists($className)) {
            throw new Exception($className . ' does not exist!');
        }

        $classObj = new $className($make, $model, $color);

        return $classObj;
    }
}

// -----------------------------------------------------------

$carObject = CarFactory::getCar('toyota', 'crx', 'black');
echo '<pre>';
print_r($carObject);



