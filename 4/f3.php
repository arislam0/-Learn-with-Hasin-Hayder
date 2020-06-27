<?php 

include 'header.php'; 
//setcookie('visited',"",time()-300);

?>

   <section class="maincontent">
      
        
        <p>

      <?php
       
       $fname="";
       $lname="";

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
     
           <button type='submit'>Submit</button><br><br>
            
        </form>
       
	  

   </section>

 <?php 

include 'footer.php'; 

?>
