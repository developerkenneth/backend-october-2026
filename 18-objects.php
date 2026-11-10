<?php
// objects


// assoc array
$person =  [
    'name' => 'john doe',
    'age' => 25,
    'department' => 'Agric'
];

// std objects
// creating objects
$object = (object)  [
    'name' => 'john doe',
    'age' => 25,
    'department' => 'Agric',
    'result' => (object) [
        'physics' => 'd',
        'maths' => 'c',
        'english' => 'a'
    ]
];



// creating objects 2
$object2 = new stdClass();


// getting objects value

echo $object->name . "<br>";
echo $object->age . "<br>";
echo $object->result->english;



// setting objects value
$object2->name = 'agata';
$object2->age = 25;
$object2->heght = "6'1";


$object->name = 'success';


?>


<pre>
    <?php
    echo "<br>";
    var_dump($object);


    echo "<br>";
    var_dump($object2);
    ?>
</pre>