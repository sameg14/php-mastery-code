<?php

//phpinfo();
//die();

// Class definition or class declaration
/**
 * Class OrganicAdsShopper represents data and functionality for a shoppers
 */
class OrganicAdsShopper
{
    // public is known as a visibility modifier
    /**
     * This is the shopper's name
     * @var string
     */
    public $name;

    /**
     * This is how old the shopper is
     * @var int
     */
    public $age;

    /**
     * Where this person lives
     * @var string
     */
    protected $location;

    public function __construct($shopperName, $theirAge, $location = 'Austin')
    {
        $this->name = $shopperName;
        $this->age = $theirAge;
        $this->location = $location;
    }
}

##########################################################################

// Instantiation: Usage is when you instantiate a class into an object
echo '<pre>';
$shopper1 = new OrganicAdsShopper('Justin', 25);
//$shopper1->name = 'Justin';
//$shopper1->age = 23;
print_r($shopper1);

$shopper2 = new OrganicAdsShopper('Natalie', 24);
//$shopper2->name = 'Natalie';
$shopper2->age = 25;
print_r($shopper2);