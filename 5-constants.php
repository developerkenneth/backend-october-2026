<?php

define("PIE", 3.14);
// creating a constant variable in php
$name = "my name is John Doe";
const constant = "hello world";

echo PIE;

define("NEW_VAR", $name);
echo "<br>" . NEW_VAR . " <br>";

echo constant;
