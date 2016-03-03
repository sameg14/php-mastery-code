<?php
// Looking at inheritance

// Common stuff will go in the super type
class Animal
{
    /**
     * Name of the animal
     * @var string
     */
    protected $name;

    /**
     * Is the animal furry or not?
     * @var bool
     */
    protected $furry = false;

    /**
     * How many legs does she have?
     * @var int
     */
    protected $numLegs;

    /**
     * Social security number
     * @var string
     */
    private $ssn = '123-34-1232';

    public function __construct($name, $furry, $numLegs)
    {
        $this->name = $name;
        $this->furry = $furry;
        $this->numLegs = $numLegs;
    }


    /**
     * Create a description of this creature based on information available
     * @return string
     */
    function describe()
    {
        // If this creature is furry I would like to say wow you're furry
        // If the number of legs is greater than 3 I want to say you're a spider
        // I want the creature's name to be in the statement somewhere

        $statement = $this->name;

        //$statement.= $this->furry ? ' creature is furry' :' creature is NOT furry';
        if ($this->furry) {
            $statement .= ' the creature is furry';
        } else {
            $statement .= ' the creature is NOT furry';
        }

        if ($this->numLegs > 3) {
            $statement .= ' and is a spider!';
        }

        $statement .= $this->ssn;

        return $statement;
    }

    protected function onlyAccessInAnimal(){
        return 'fooo';
    }
}

// ------------------------------

// Specific stuff will go in the sub-type or the child class
class Person extends Animal
{
    public function describe()
    {
        $parentValue = parent::describe();

        //$parentValue .= $this->ssn;

        return $parentValue. ' but I am really a dog';

        //return parent::describe();
    }
}

class Dog extends Animal
{
}


// --------------

echo '<pre>';
$person = new Person('Samir', true, 4);
echo $person->describe();
//print_r($person);