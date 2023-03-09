<?php
//! creating variables & initializing
$name = 'Leonard';
$age = 22;
$my_gpa= 2.75;
$colors = ['red', 'green', 'blue'];
$is_admin = true; //!return 1 
$is_login = false; //!return nothing or blank screen 
echo $name, $age;
// var_dump($colors);
echo "\n";
//!concatenating values
echo "\n" . $name . ' is ' . $age . ' and has a GPA of ' . $my_gpa . ' this semester😊' . "\n"; //!prints out the same message
echo "\n$name is $age and has a GPA of  $my_gpa  this semester😊\n";
echo "\n{$name} is {$age} and has a GPA of  {$my_gpa}  this semester😊\n"; //!Returns a depreciation error method due to the PHP 8.2 and later version 
echo "\n$name is $age and has a GPA of  $my_gpa  this semester😊\n"; //! this method solves the issue of the  depreciation message

//!defining constants
//!by convention variable names all in caps
define("PI", 3.14);
?>