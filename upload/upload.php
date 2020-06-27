<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <style>
        body {
            text-align: center;
            padding: 100px;
        }
        </style>
    </head>

    <body>


        <?php

$filePath = "upload/".$_FILES['img']['name'];
$tmpName = $_FILES['img']['tmp_name'];
$filename = $_FILES['img']['name'];
$extension = pathinfo($filename, PATHINFO_EXTENSION);

if ($extension == 'jpg' || $extension == 'png') {
    move_uploaded_file($tmpName, $filePath); ?>
        <h1 class="success">File Uploaded Successfully</h1>
        <img src="<?php echo $filePath ?>" alt="img" width="200px" height="auto"><br><br><br>
        <?php
} else { ?>
        <h1 class="danger">File Upload Error. Please Go Back and Upload An Image</h1>
        <?php
}

?>


        <a href="index.php" class="submit">Go Back</a>


    </body>

</html>