
<html>
<body>
<br/>
<br/>
<form action="" method="post" enctype="multipart/form-data">
      image upload:
    <input type="file" name="image" id="fileToUpload">

    <input type="submit" value="Upload Image" name="submit">
</form>
<br/>
<br/>

<?php

if ( isset( $_FILES['image'] ) ) {

    $filename = $_FILES['image']['name'];

    $tempfile = $_FILES['image']['tmp_name'];

    $check = getimagesize( $_FILES["image"]["tmp_name"] );

    if ( $check !== false ) {
        move_uploaded_file( $tempfile, "C:/Users/HP/Desktop/" . $filename );
        echo "image upload successfully";
    } else {
        echo "File is not an image.";
    }

}

?>


</body>
</html>