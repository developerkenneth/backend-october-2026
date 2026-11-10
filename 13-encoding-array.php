<?php

$encoded = json_encode($_POST);
echo $encoded;
echo "<br>";
print_r($_POST);

$json = file_get_contents('people.json');

$decode = json_decode($json, true);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>encoding array</title>
</head>

<body>

    <pre><?php print_r($decode); ?></pre>
    <form action="" method="post">


        <p>name:</p>
        <input type="text" name="name">

        <p>email:</p>
        <input type="text" name="email">

        <br>
        <br>
        <button type="submit"> send form</button>
    </form>

</body>

</html>