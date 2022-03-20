<?php

// Function which prints "Hello I am Zura"

// function hello(){
//     echo "Hello I'm Sodi";
// }
// hello();

// Function with argument
function hello($name){
    return  "Hello I'm $name";
}
echo hello("Sandun").'<br>';
echo hello("Sodi").'<br>';

// Create sum of two functions

// function sum($a, $b){
//     return $a +$b;
// }

// echo sum(10,5);

// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//     $sum = 0;
//     foreach ($nums as $value) {
//         $sum += $value;
//     }

//     return $sum;

// }

// echo sum(1,2,3,4,5,6);
// Arrow functions

function sum(...$nums){
   return array_reduce($nums,fn($carry,$n)=>$carry+$n);
}

echo sum(1,2,3,4,5,6);
