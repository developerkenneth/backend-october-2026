<?php
// php strings 
$name = 'John';
$introduction = 'my name is';

// string concatination (using period)
echo $introduction . ' ' . $name;


// template string

echo " <br> {$introduction} {$name} ";

// string functions
$string = "hello world";

// string to lower case 
echo "<br>" . strtolower($string) . "<br>";

// string to upper case
echo strtoupper($string);

// getting the index of a string character


echo "<br> " . strpos($string, 'l');


$textBody = "hello world my name is John Doe and I love to eat eba. please donate for me so I can buy plenty eba";
$wordToReplace = "eba";
$wordToReplaceWith = "chicken";


$edited = str_replace($wordToReplace, $wordToReplaceWith, $textBody);

echo "$textBody <br> $edited";

$wordLength = strlen($textBody);

echo "<br> $wordLength ";

$indexOfIntro = strpos($textBody, "Doe");
$introText = substr($textBody, 0, $indexOfIntro + 3);
echo "<br> $introText";
