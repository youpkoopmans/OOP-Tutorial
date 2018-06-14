<?php

class Math {

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

//$math = new Math;
//
//var_dump($math->add(1, 2, 3, 4));

//echo Math::add(1, 2, 3);

class Person {
    // Don't use a static like this!!///////////////////
    // public static $age = 1;
    public $age = 1;

    public function haveBirthday()
    {
        // static::$age += 1;
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

//echo $joe->age();

$jane = new Person;
$jane->haveBirthday(); // 2

//echo $jane->age();

//echo Person::$age;

//class BankAccount {
// Don't use a static like this!!///////////////////
//    public static $tax = .09;
//}
//
//BankAccount::$tax = 1.5;

class BankAccount {
    const TAX = .09;
}

echo BankAccount::TAX;