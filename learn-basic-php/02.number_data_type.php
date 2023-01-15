<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in number : ";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point with E notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point with E notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore in Floating Point : ";
var_dump(1_234.567);

echo "Integer Overflow 64 bit limit  : ";
var_dump(9223372036854775807);

echo "Integer Overflow 64 bit over limit : ";
var_dump(9223372036854775808);