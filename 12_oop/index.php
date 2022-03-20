<?php

// What is class and instance
require_once "Person.php";
require_once "Student.php";

$student = new Student("Sodi","Adikaram",123456);

echo '<pre>';
var_dump($student);
echo '<pre>';

// $person = new Person("Brad","Traversy");
// $person->setAge(30);

// echo '<pre>';
// var_dump($person);
// echo '<pre>';

// echo $person->name.'<br>';
// echo $person->getAge();

// $person2= new Person("Sodi","Adikaram");

// echo '<pre>';
// var_dump($person2);
// echo '<pre>';


// echo Person::getCounter(); // Access to static properties using double colone(::)
// echo $person2->name.'<br>';
