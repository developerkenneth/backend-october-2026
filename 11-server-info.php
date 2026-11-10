<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getting server information in php</title>
</head>

<body>

    <pre>
    <?php print_r($_SERVER);
    ?> 

    <!-- server information -->
    <?= $_SERVER['PHP_SELF']; ?>
</pre>

</body>

</html>