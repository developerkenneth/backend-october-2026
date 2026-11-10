<?php

// if 
// if else
//  else if


$age = 16;
$country = "america";


// if ($age >= 18) {
//     echo "eligible to drink";
// } else if ($age >= 16 &&  $country == "america") {
//     echo "an american up to 16 years can still drink";
// } else {
//     echo "bros you cannot drink o";
// }


if ($age >= 18):

    echo "eligible to drink";

elseif ($age >= 16 &&  $country == "america"):

    echo "an american up to 16 years can still drink";

else:

    echo "bros you cannot drink o";

endif;



$age = 23;
//switch statement
switch ($age) {
    case 24:
        echo "<br> age is 24";
        break;


    case 23:
        echo "<br> age is 23";
        break;


    case 25:
        echo "<br>age is 25";
        break;


    default:
        echo "age is none of the above";
        break;
}


$income = 100000;

switch (true) {
    case $income < 50000:
        echo "<br> just chop first";
        break;

    case $income > 70000:
        echo "save 10k";
        break;

    case $income  >= 10000:
        echo "save 20k";
        break;

    default:
        echo "please look for a job or start business";
        break;
}

// tenary operator

echo true ?  "<br> hello world" : " <br> good night";

echo (1 > 2) ? "<br> 1 is greater than 2" : " <br> 2 is greater than 1";


// return true if arguement is true
$result =  true && true;
echo "<br> $result";

// return true if argument is true
echo true ?? "hello world";
