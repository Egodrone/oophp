<?php

/**
 * Showing off a standard class with methods and properties.
 */
class Person1
{
    /**
     * @var string  $name   The name of the person.
     * @var integer $age    The age of the person.
     */
    public $name;
    public $age;

    /**
     * Print out details on the person.
     *
     * @returns string with details on person.
     */
    public function details() 
    {
        return "My name is {$this->name} and I am {$this->age} years old";
    }
}
