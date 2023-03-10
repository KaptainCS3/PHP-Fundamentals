<?php
//! Function declaration

function greet(){
 echo "good evening Leo";
}

//! $num1, $num2 are parameters variable to be used in the function
function sum ($num1, $num2){
    return $num1 + $num2;
}
//! paramater with default values
function sum_default ($num1 = 8, $num2 = 5){
    return $num1 + $num2;
}

//! exe the function
greet ();
// 8 & 12 arguments actual value passed to the function
echo sum(8, 12);
//! #2
//! anonymous or function expression
$welcome = function(){
    echo 'Welcome Leo how was work today?';
};
$welcome();

//! #3
//! arrow function

$arrow_function = fn() => 'Arrow function as in javascript';
echo $arrow_function();
?>
