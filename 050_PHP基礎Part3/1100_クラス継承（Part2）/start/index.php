<?php
/**
 * クラス継承
 */
abstract class Person
{
    private $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE;
        echo static::$WHERE;
    }

    abstract function hello();

    static function bye()
    {
        echo 'bye';
    }
}

class Japanese extends Person
{
    public static $WHERE = '日本';

    function __construct($name, $age)
    {
        parent::__construct($name, $age);
        $this->name = $name;
        $this->age = '30';
    }
    function hello()
    {
        echo 'こんにちは, ' . $this->name;
        return $this;
    }

    function jusho()
    {
        echo '住所は、' . parent::$WHERE . 'です。';
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
// $taro->hello();
// $taro->jusho();

class Car
{
    public string $make;
    public string $model;
    public int $year;

    function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function getCarInfo()
    {
        echo "<p>" . "{$this->year}, {$this->make}, {$this->model}" . "</p>";
        return $this;
    }
}

$benzCar = new Car('EU', 'benz', 1960);
$benzCar->getCarInfo();