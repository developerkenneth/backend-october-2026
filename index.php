<?php
// creating a connection to a database server


$dsn_example = "driver:host=hostname;port=3306; dbname=your_database_name; charset=armscii8_bin";
$dsn = "mysql:host=localhost;dbname=new_database;";
$username = "root";
$password = "";

// check if connection was successful
try {
    $connection = new PDO($dsn, $username, $password);
    if ($connection) {
        echo "connected";
    } else {
        echo "failed to connect";
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}

// writing query : INSERT A NEW ROW
// $stmt = $connection->query("INSERT INTO `posts` (`title`, `body`, `author`) VALUES ('first post', 'this is my first post', 'mr kay')");
// if ($stmt) {
//     echo " created successfully";
// }

// fecthing data from database

$stmt = $connection->query("SELECT * FROM `posts`");
// convert stmt to an associative array
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($posts);
