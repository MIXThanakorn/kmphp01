<?php
//function
//no parameters no return
function greet() {
    echo "Hello from the greet function!";
}
greet();
echo "<br/>";
//with parameters no return
function greetPerson($name) {
    echo "Hello, " . $name . "!";
}
greetPerson("John");
echo "<br/>";
//with parameters with return
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}
$result = addNumbers(5, 3);
echo "The sum is: " . $result;
echo "<br/>";
//no parameters with return
function getCurrentDate() {
    return date("Y-m-d");
}
//arrow function
$woo = fn() => "Hello from arrow function!";
echo $woo();

$hi = fn($name) => "Hello, " . $name . " from arrow function!";
echo "<br/>";
echo $hi("John");

?>