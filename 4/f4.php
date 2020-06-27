<?php 
header('X-XSS-Protection:0');
include 'header.php'; 
include_once 'function1.php';

?>

   <section class="maincontent">
      
        
        <p>

      <?php
       
       $fname="";
       $lname="";
       $checked="";
       if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1){
          $checked = 'checked';
       }

       //print_r($_REQUEST);

      ?>

        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {  
                      //$fname= htmlspecialchars($_REQUEST['fname']);
                      $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        } ?>  

        <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {  
                      // $lname = htmlspecialchars($_REQUEST['lname']); 
                       $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
         } ?>  
        </p>

        <p>
           First Name: <?php echo $fname; ?> <br/>
           Last Name: <?php echo $lname; ?> <br/>

        </p>
        <br/>
        <br/>

        <form method="POST">
           
           <label for="fname">First Name </label>

           <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"><br><br>
     
           <label for="lname">Last Name </label>
           <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"><br><br>
             
         <div>
                     <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked?> >
                     <label for="cb1" class="label-inline">Some Checkbox</label>
         </div>
         
         <label class="lebel">Select Some Fruits</label><br/>

         <input type="Checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange')?> >
         <label class="lebel-inline">Orange</label><br/>

         <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits','mango')?>>
         <label class="lebel-inline">Mango</label><br/>

         <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits','banana')?>>
         <label class="lebel-inline">Banana</label><br/>

          
         <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits','lemon')?>>
         <label class="label-inline">Lemon</label><br/>

         <br/>
           <button type='submit'>Submit</button><br><br>
            
        </form>
       
	  

   </section>

 <?php 

include 'footer.php'; 

?>
