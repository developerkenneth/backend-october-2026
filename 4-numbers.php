<?php

$integer = 25;
$floats = 25.7;
$decimal = 22.3;



// is_int() checks if s value is an integer or not

// if (is_numeric($floats)) {
//     echo " <br> true, float is numeric ";
// }


// if (is_numeric($integer)) {
//     echo " <br>vtrue, int is numeric";
// }


// if (is_numeric(false)) {
//     echo "true <br> bool  is numeric";
// }



// $result = round($floats);
// $resultTwo = round($decimal);



// $result = ceil($floats);
// $resultTwo = ceil($decimal);


// $result = floor($floats);
// $resultTwo = floor($decimal);

// echo "<br> $result, $resultTwo";



// generating random numbers

// $randomNumber = rand(0, 100);

// echo $randomNumber;



// formatting numbers into user formats

$number = 7000000;

echo number_format($number, 2, ",", ".");
// ceil();
// round();
// floor();
// rand();
// number_format();
