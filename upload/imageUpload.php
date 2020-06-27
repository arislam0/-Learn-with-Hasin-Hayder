<!doctype html>
<html>

<head>
       <title>Output PHP</title>
	   
	   <style>	   
	     .phpcode{ width:900px; margin: 0 auto; background:<?php echo "#fff" ?>;}		   
		   .headeroption, .footeroption{background:#444;color:#fff;text-align:center;padding:20px;}		   
		   .headeroption h2,.footeroption h2{margin: 0;}		   
		   .maincontent{ min-height:500px;padding:20px;}
		   P{margin:0};
	   
	   </style>
	   
</head>
<body>     
<div class="phpcode">	
   <section class="headeroption">

        <h2> <?php echo "Problem 2" ?> </h2>

   </section>
   
   PHP Date and Time
   <span style="float:right">
     <?php
	  
	  date_default_timezone_set('Asia/Dhaka');
	  echo "Time is ".date("h:i;sa");
	 
	 ?> 
   </span>
   <hr/>

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
				
													move_uploaded_file($filetmp,"C:/Users/HP/Desktop/".$filename);
							echo "Image uploaded successfully";
													$uploadOk = 1;
				
							} else {
		
										echo "File is not an image.";
										$uploadOk = 0;
							}
		}
			
			
	?>
	


		</section>
 
  <section class="footeroption">
	        
			<p>&copy; <?php echo date("Y")?> LU </p>

            <h2> <?php echo "lu.ac.bd" ?> </h2>

    </section>
	 
</div>
</body>
</html>