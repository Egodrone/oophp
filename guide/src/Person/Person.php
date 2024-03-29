<?php
namespace Mos\Person;

/**
 * Showing off a standard class with methods and properties.
 */
class Person
{
    /**
     * Constructor to create a Person.
     *
     * @param string $name The name of the person.
     * @param int    $age  The age of the person.
     */
    public function __construct(string $name = null, int $age = null)
    {
        $this->name = $name;
        $this->age = $age;
    }



    /**
     * @var string  $name   The name of the person.
     * @var integer $age    The age of the person.
     */
    private $name;
    private $age;



    /**
     * Print out details on the person.
     *
     * @returns string with details on person.
     */
    public function details()
    {
        return "My name is {$this->name} and I am {$this->age} years old";
    }



    /**
     * Set the age of the person.
     *
     * @throws PersonAgeException when age is negative.
     *
     * @param int $age The age of the person.
     *
     * @return void
     */
    public function setAge(int $age)
    {
        if (!(is_int($age) && $age >= 0)) {
            throw new PersonAgeException("Age is only allowed to be a positive integer.");
        }
        $this->age = $age;
    }



    /**
     * Get the age of the person.
     *
     * @return int as the age of the person.
     */
    public function getAge()
    {
        return $this->age;
    }



    /**
     * Set the name of the person.
     *
     * @param int $name The name of the person.
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }



    /**
     * Get the name of the person.
     *
     * @return string as the name of the person.
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Destroy a Person.
     */
    public function __destruct()
    {
        echo __METHOD__;
    }
}
