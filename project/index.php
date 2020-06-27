<html>
<head>
		<title>Web Final Assignment</title>
</head>


<!Dynamic>
<?php
		if(isset($_FILES['image'])){
			$filename=$_FILES['image']['name'];  /*file name*/
			$filetmp=$_FILES['image']['tmp_name']; /*temporary copy*/
			move_uploaded_file($filetmp,"images/".$filename); /*appending to the image folder*/
			echo "Image Uploaded Successfully";
			
		}
		


?>


<body>

<form action="?" method="post" enctype="multipart/form-data">
      image upload:
    <input type="file" name="image" >
    <input type="submit" value="Upload Image" name="submit">
</form>

 </body>
 </html>