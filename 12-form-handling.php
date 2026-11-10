<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    echo "request method POST<br>";
    print_r($_POST);
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo "request method GET<br>";

    print_r($_GET);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>handling form request </title>
</head>

<body>

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