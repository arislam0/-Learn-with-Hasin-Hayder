<?php 
//header('X-XSS-Protection:0');
include 'header.php'; 

include_once 'form2-function.php';

$fruits = ["mango", "orange", "banana", "apple", "lemon","peach"];

$seclected =[];

?>



   <section class="maincontent">


   <p>   

<?php
      //   if(isset($_POST['fruits']) &&  $_POST['fruits']!='')
      //   {
      //      printf("you have selected: %s",filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
      //   }
      //   echo "<br/>";

      $seclected = $_POST['fruits']??array();

      if(!empty($seclected))
      {
         $seclected = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
      }

      if(count($seclected)>0)
      {
         echo "You have selected: ".join(",",$seclected);
      }
      

   ?>

</p>
<br/>

           

             <form method="POST">

                  <label for="fruits">Select Some Fruits:</label>

                  <select style="height:200px;" name="fruits[]" id="fruits" multiple>

                     <option value="" disabled selected>Selected Soome Fruits</option>

                         <?php displayOptions($fruits,$seclected);?>

                  </select>
                  
                  <button type="submit">Submit</button>

             </form>
                
            <br/>

	
   </section>

 <?php 

include 'footer.php'; 

?>
