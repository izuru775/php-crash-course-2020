<?php

$age = 0;
$salary = 300000;

// Sample if

// if($age === 20){
//     echo "1";
// }

// Without circle braces

// if($age === 20) echo "1";

// Sample if-else

// if ($age > 20){
//     echo "1";
// }else{
//     echo "2";
// }

// Difference between == and ===

// if($age == 20){
//     echo "1".'<br>';
// }

// if ($age == '20'){
//     echo "2".'<br>';
// }
// if AND

// if($age== 20 && $salary === 300000){
//     echo "Do Something";
// }

// if OR

// if($age> 20 || $salary === 300000){
//     echo "Do Something";
// }

// Ternary if

// echo $age <22 ? 'Young':'Old';

// Short ternary

$myAge = $age ?: 18;

echo '<pre>';
var_dump($myAge);
echo '<pre>';

// Null coalescing operator

// $myName = isset($name)?$name:'Sodi';
$myName = $name ?? 'Sodi';
echo '<pre>';
var_dump($myName);
echo '<pre>';
// switch
$userRole = 'news editor'; // editor,user, admin
switch ($userRole) {
    case 'editor':
        echo "User is an Editor!";
        break;
    case 'user':
        echo "User is a user!";
        break;
    case 'admin':
        echo "User is a admin!";
        break;
    default:
        echo "Unable to find user";
        break;
}
