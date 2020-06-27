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
           if(in_array($_FILES['photo']['type'],$allowedTypes) !== false && $_FILES['photo']['size']<5*1024*1024){
           move_uploaded_file($_FILES['photo']['tmp_name'],"files/".$_FILES['photo']['name'] );
           }
         }
        
      ?>

   <form method="POST"  enctype="multipart/form-data">

    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname"><br/><br/>


    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname"><br/><br/>


    <label for="photo">Photo</label>
    <input type="file" name="photo" id="photo"><br/><br/>


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
