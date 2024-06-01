<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public const whereToLive = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo 'hello, ' . $this->name;
        static::bye();
        // self::bye();
        return $this;
    }

    static function bye()
    {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
echo Person::whereToLive;

// Person::bye();
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();