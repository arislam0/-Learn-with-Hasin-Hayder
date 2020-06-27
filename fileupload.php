<?php include 'header.php'; ?>

   <section class="maincontent">
   
    <form method="POST" action="" enctype="multipart/form-data">
	   image upload: <input type="file" name="image"/>
	   <input type="submit" value="Upload Image"/>
	 </form>
	 <br>
	 <br>
 
     <?php
	  if(isset($_FILES['image']))
	  {
		  $uploadOk = 1;
		  
		  $filename = $_FILES['image']['name'];
		  
		  $filetmp = $_FILES['image']['tmp_name'];
		  

		  
		  $check = getimagesize($_FILES["image"]["tmp_name"]);
		  
		  if($check !== false) {
			  
              move_uploaded_file($filetmp,"C:/Users/HP/Desktop/nf/".$filename);
		      echo "Image uploaded successfully";
              $uploadOk = 1;
			  
        } else {
			
           echo "File is not an image.";
           $uploadOk = 0;
        }
	  }
	   
	   
	 ?>
	 


   </section>

 <?php include 'footer.php';?>