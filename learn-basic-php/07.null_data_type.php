<?php

$name = "Farhan";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// is_null => checks whether the value of the variable is null or not

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// Delete variable values

$nickname = "MFL";
unset($nickname);

$nickname = "FL";
$nickname = NULL;

// checks if a variable exists and its value is not NULL
var_dump(isset($nickname));