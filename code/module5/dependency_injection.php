<?php

// Dependency injection: Inject all objects into your classes, never instantiate inside! ever!

class Door
{
    protected $type;

    public function __construct($type)
    {

        $this->type = $type;
    }
}

class Window
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }
}

class House
{
    protected $door;

    protected $window;

    public function __construct(Door $door, Window $window)
    {
        $this->door = $door;
        $this->window = $window;
    }
}

$window = new Window('french');
$door = new Door('metal');

$myHouse = new House($door, $window);
echo '<pre>';
print_r($myHouse);


$window = new Window('glass');
$door = new Door('wooden');

$yourHouse = new House($door, $window);
echo '<pre>';
print_r($yourHouse);


