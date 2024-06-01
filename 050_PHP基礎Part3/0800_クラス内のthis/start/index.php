<?php
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo 'hello, ' . $this->name;
        return $this;
    }

    static function bye()
    {
        echo 'bye, ';
    }
}

$bob = new Person('Bob', 18);
Person::bye();
// $bob->hello()->bye();
// $tim = new Person('Tim', 32);
// $tim->hello();