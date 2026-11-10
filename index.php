<?php

// gives us the root directory to a particular folder
echo __DIR__ . "<br>";


echo dirname(__DIR__) . "<br>";

// file path

echo __FILE__;

// make dir
// make a  new folder called test
mkdir("test");
chmod("./class/1-basics.php", 640);
