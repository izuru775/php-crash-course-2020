<?php

// What is class and instance
class Person{
    public $name;
    public $surname;
    private $age;
    private static $counter = 0;

    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }

    public function setAge($age){
        $this->age =$age;
    }

    public function getAge(){
        return $this->age;
    }

    public static function getCounter(){
        return self::$counter;
    }
}

$person = new Person("Brad","Traversy");
$person->setAge(30);

echo '<pre>';
var_dump($person);
echo '<pre>';

echo $person->name.'<br>';
echo $person->getAge();

$person2= new Person("Sodi","Adikaram");

echo '<pre>';
var_dump($person2);
echo '<pre>';


echo Person::getCounter(); // Access to static properties using double colone(::)
// echo $person2->name.'<br>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter