<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $replace = $_POST['replace'];
    $replace_with = $_POST['replace_with'];
    $body = strtolower($_POST['body']);

    echo str_replace($replace, $replace_with, $body);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>word replace</title>
</head>

<body>

    <form action="" method="post">


        <p>replace word:</p>
        <input type="text" name="replace">

        <p>replace word with:</p>
        <input type="text" name="replace_with">

        <br>
        <br>

        <textarea name="body">

        </textarea>
        <button type="submit"> send form</button>
    </form>

</body>

</html>