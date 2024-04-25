<?php

//Create a function that prints "Hello, World!".

function greet(){
    echo "hello world!";
}

//greet();

//Function with a parameter: Write a function that takes a name as a parameter and prints "Hello, [name]!".
function helloName($name){
    echo "hello ${name}";

}

//helloName("Racks");

//Function to add two numbers: Create a function that accepts two numbers as parameters and returns their sum.
function sum($n1, $n2){
    return $n1 + $n2;

}

$numbers = sum(4887345,584754);
//echo "the sum is ${numbers}";

//Function to check even numbers: Write a function that takes a number and returns true if the number is even, and false otherwise.
function evenOrOdd($num){
    if($num % 2 == 0){
        return "true";

    }else{
        return "false";
    }

}

$check = evenOrOdd(578447);
//echo $check;

//Function to multiply values: Write a function that takes an array of numbers and returns the product of all the numbers.

function multiplyArray($arr){
    $result = 0;
    foreach($arr as $value){
        $result += $value;
    }

    //$product = array_sum($result);
    return $result;

}

$final = multiplyArray([3,54,65,34,56]);
//echo "the result is ${final}";

//Function to reverse a string: Create a function that accepts a string and returns it reversed.

function reverseString($string_to_reverse){
    return strrev($string_to_reverse);
}

$test = reverseString("hello world");
//echo "the string reversed is ${test}";


//Function that returns an array: Write a function that creates and returns an array containing all numbers from 1 to a given parameter.

function returnArray($given_num){
    $new_arr = [];
    for($x = 1; $x < $given_num; $x++){
        array_push($new_arr, $x);
    }

    return $new_arr;

}

$test2 = returnArray(10);
//echo "the new array is [" . implode(", ", $test2) . "]";

//Function to find the maximum number: Create a function that takes an array of numbers and returns the largest number.

function largest($large_num){
    $find_large = [];

    foreach($large_num as $large){
        array_push($find_large, $large);
    }
    return max($find_large);

}

$trythis = largest([4,67,45,365,3,254,54]);
//echo "the largest number is ${trythis}";

//unction using global variables: Use a global variable inside a function to modify its value.
$y = 4587784;

function modify(){
    global $y;
    $y = 60;

    return $y;
}

$trying = modify();
echo "the value after modifying is ${trying}";


?>