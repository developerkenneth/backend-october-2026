<?php
// function add()
// {
//     $result = 1 + 1;
//     echo $result;
// }

// return key word 

// function add()
// {
//     $result = 1 + 1;
//     return $result;
//     // any code written below return will not execute
// }


// return multiple array value

function add()
{
    $result = 1 + 1;
    return ['message' => "tank u for banking with us", 'result' => $result];
    // any code written below return will not execute
}




// calling function
$result =  add();

echo $result['message'];
echo $result['result'];

echo " {$result['result']}<br> {$result['message']} <br>";

// global scope vs local scope

$global_var = 2;

if ($global_var === 2) {
    $local_var = 10;
    echo $local_var;
}

for ($i = 0; $i < 5; $i++) {
    $m = 2;
}

$string = "hello world";

function stringEcho()
{
    $age = 24;
    echo $string;
}

echo $age;



// parameters

$gender = "male";

function send($message, $username, $time_sent)
{
    echo "$message ::: $username [$time_sent] <br>";
}

send('hi world', 'kcee', 'now');
send('hahaha! funny you', 'jess', '2:22pm');
