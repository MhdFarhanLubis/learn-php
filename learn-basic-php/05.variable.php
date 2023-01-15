<?php

// Variable => Mutable

$name = "farhan";
$age = 19;


echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo " years old\n";

// Variable Variables
// it is not recommended to use it because it will create confusion in the program

$full_name = "Farhan";
$$full_name = "Lubis";

echo "Fullname : ";
echo $full_name;
echo "\n";

echo "Surname : ";
echo $Farhan;
echo "\n";