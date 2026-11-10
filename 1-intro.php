<?php

// writing my first variable
// $my_first_variable =  "my first variable";
// echo $my_first_variable;
// echo ($my_first_variable);
// print $my_first_variable;
// print($my_first_variable);

$username = "Jessica Doe";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP script</title>
</head>

<body>
    <h1>Hello, <?php echo $username; ?></h1>
    <h1>Hello, <?= $username; ?></h1>


</body>

<script>
    // php can also accept js script
    // alert("hello world")
</script>

</html>