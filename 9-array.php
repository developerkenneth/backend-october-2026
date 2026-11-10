<?php

// creating an array

// method 1

// creating empty
$array = [];

$collection = array();



// creating with array elements

$numbers = [1, 2, 3, 4, 5];
$datas = array('john', true, 1, null, 4.6);


// inserting new elements
$numbers[] = 10;

// method 2
array_push($datas, 'new value');


// removing array elements
// array pop function

array_pop($datas);

// unset function
unset($datas[3]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array in php</title>
</head>

<body>
    <pre>
        <?php print_r($array) ?>
        <?php print_r($collection) ?>
        <?php print_r($numbers) ?>
        <?php print_r($datas) ?>
    </pre>

    <h1>accessing array values</h1>
    <p><?= $numbers[0];  ?></p>
    <p><?= $datas[1];  ?></p>



    <!-- array loop -->
    <?php
    $count = count($numbers);
    $i = 0;
    while ($i < $count) {
        echo "{$numbers[$i]} <br>";

        // final expression 
        $i++;
    }


    foreach ($numbers as $number) {
        echo "{$number} <br>";
    }
    ?>
</body>

</html>