

<?php
// file handling:

//  write mode
// $handler = fopen('./files/new_file.php', 'w');


// append mode
// $handler = fopen('./files/new_file.php', 'a');

$path = './files/new_file.php';
$path_2 = "./files/test.txt";


// writing in a file
// fwrite($handler, 'whaterer you want to write here');
// $handler = fopen($path_2, 'r');
// $fileSize = filesize($path_2);

// $read = fread($handler, $fileSize);
// echo $read;


$handler = fopen($path_2, 'r');
$fileSize = filesize($path_2);

while (!feof($handler)) {
    echo fgets($handler) . "<br> <br>";
}


// close file 
fclose($handler);



// file get content

$fileDetails = file_get_contents($path_2);

echo $fileDetails;
// file put content

// re writing file content

$new_text = "hello world I love u all";
file_put_contents($path_2, $new_text);


// deleting file
// unlink('./files/rubbish.txt');


// useful file functions
if (file_exists('rubbish.txt')) {
    echo "<br>file actually exist <br>";
} else {
    echo "<br>file does not exist <br>";
}
