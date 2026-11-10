<?php

// loops in php

// for loop 

for ($i = 0; $i < 10; $i++) {
    // run code...
    echo " $i <br>";
}


// while loop 


// init
$i = 10;


// condition will be in the parantesis 
while ($i > 0) {


    // run code here ...
    echo "<br> $i";


    // final expression
    $i--;
}


// do while loop

$init = 0;
do {

    // abovce
    if ($init === 0) {
        echo " count starts from $init <br>";
    } else {
        echo "count is now $init <br>";
    }

    $init++;
    // beneath
} while ($init <= 10);
