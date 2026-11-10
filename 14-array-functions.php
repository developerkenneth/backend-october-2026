<?php

// array push
// array pop
// array map
// array walk
// count
//implode
//explode
//end
//in_array

$numbers = [1, 2, 3, 4, 5];

$new_numbers = array_map(function ($number) {

    if ($number < 5) {
        return $number + 10;
    }
    return $number;
}, $numbers);


function reduce($number)
{
    return $number - 1;
}


$reduced = array_map("reduce", $numbers);


// function multiply($number)
// {
//     return "hello $number";
// }
// //  array walk
// $numbers_add = array_walk($numbers, 'multiply');


// implode 
$names = ['jane', 'success', 'emmanuel', 'john'];

$presidents = "tinubu, obi, kenneth";

$toString = implode(', ', $names);
$toArray = explode(', ', $presidents);
$winner = end($toArray);
?>

<pre>
 <?php print_r($numbers); ?>
 <?php print_r($new_numbers); ?>
  <?php print_r($reduced); ?>
    <?php //print_r($numbers_add); 
    ?>

    <?= $toString; ?>
      <?php print_r($toArray); ?>
          <?= "<br>" . $winner; ?>





</pre>