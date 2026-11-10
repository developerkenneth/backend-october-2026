<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $file = $_FILES['file'];

    // type casting 
    $file_size = (int) $file['size'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];

    // validation for file size

    $maxim_file_size = 1024 * 1024 * 2; //2mb
    $required_file_type = ['jpg', 'jpeg', 'png'];
    // $actual_file_type

    $filename_to_array = explode('.', $file_name);
    // getting the last array element which is the file extension
    $file_ext = end($filename_to_array);

    // validation

    if (!in_array($file_ext, $required_file_type)) {
        echo "invalid file extension, please pass a valid image file. we accept: jpg, png, jpeg";
        exit;
    }

    if ($file_size > $maxim_file_size) {
        echo " file cannot be greater than 2mb";
        exit;
    }


    $current_time_stamp = time();
    $encoded = md5($current_time_stamp);

    // upload the file
    $new_path = "./files/$encoded.$file_ext";
    move_uploaded_file($file_tmp, $new_path);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>

    <?php
    if (isset($file)) :
    ?>
        <pre>
    <?php print_r($file); ?>
    </pre>
    <?php

    endif;
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="filename">
        <br>
        <input type="file" name="file">
        <button type="submit">upload file</button>
    </form>

</body>

</html>