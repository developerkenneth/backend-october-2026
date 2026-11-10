<?php

$person = [
    'name' => 'Ada',
    'age' => 25,
    'height' => 180
];

// 1 step embedding
$persons = [
    [
        'name' => 'Ada',
        'age' => 25,
        'height' => 180,
        'hobbies' => ['playing', 'eating', 'sleeping']
    ],
    [
        'name' => 'Obi',
        'age' => 14,
        'height' => 188,
        'hobbies' => ['football', 'video game', 'sky diving']
    ]
]

// embedding 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array in php</title>
</head>

<body>
    <pre>
        <?php print_r($person); ?>
        <?php print_r($persons); ?>

        <?= $persons[0]['hobbies'][1]; ?>
    </pre>
</body>

</html>