<?php 
//header('X-XSS-Protection:0');
include 'header.php'; 

?>



   <section class="maincontent">

      <?php
         $allowedTypes=array(
             'image/png',
             'image/jpg',
             'image/jpeg'

         );

         if($_FILES['photo'])
         {
           $totalFiles = count($_FILES['photo']['name']);

           for($i=0; $i<$totalFiles; $i++)
           {
            if(in_array($_FILES['photo']['type'][$i],$allowedTypes) !== false && $_FILES['photo']['size'][$i]<5*1024*1024){
              move_uploaded_file($_FILES['photo']['tmp_name'][$i],"files/".$_FILES['photo']['name'][$i] );
              }
           }
      
         }
        
      ?>

   <form method="POST"  enctype="multipart/form-data">

    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname"><br/><br/>


    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname"><br/><br/>


    <label for="photo">Photo</label><br/><br/>
    
    <input type="file" name="photo[]" id="photo"><br/><br/>
    <input type="file" name="photo[]" id="photo"><br/><br/>
    <input type="file" name="photo[]" id="photo"><br/><br/>


    <button type="submit">Submit</button><br/>


   </form>
   <br/>


   <?php
   print_r($_POST);
   echo "<br/>";
   echo "<br/>";

   print_r($_FILES);
   
   ?>

<br/>
<br/>


	
   </section>

 <?php 

include 'footer.php'; 

?>
