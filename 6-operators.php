<?php

// operators

/** arithmetic operators
 * addition +
 * substraction -
 * division /
 * multiplication
 * modulus %
 * **
 * 
 */

/**
 * assignment operators
 * 
 * += 
 * -=
 * *=
 * /=
 * --
 * ++
 */


$number = 1;
$numberTwo = 2;

$number--;
$numberTwo++;
// echo $numberTwo;


$numberTwo += 6;


// comparison operators

/**
 * == 
 * ===
 * >
 * <
 * >=
 * <=
 * 
 */


$firstNumber = 6;
$secondNumber = "6";

// checks if characters are the same
// echo $firstNumber == $secondNumber;

// checks if the data type and the character also match
echo $firstNumber === $secondNumber;



/**
 * logical operators
 * &&
 * ||
 * !
 */


$age = 16;
$country = "america";


echo $age < 18 && $country == "america";


echo $age >= 18 || $country == "america";

echo $age != 18;
