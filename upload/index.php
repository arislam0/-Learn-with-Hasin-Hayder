<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Exam - PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <!-- Form for uploading images -->
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="img">Image Upload</label><br>
            <input type="file" name="img" id="img"><br>

            <input type="submit" value="Submit" class="submit">
        </form>

    </body>

</html>