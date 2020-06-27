<?php 

include 'header.php'; 
//setcookie('visited',"",time()-300);

?>

   <section class="maincontent">

       <form method="GET">
           
           <label for="fname">First Name </label>
           <input type="text" name="fname" id="fname"><br><br>
     
           <label for="lname">Last Name </label>
           <input type="text" name="lname" id="lname"><br><br>
     
           <button type='submit'>Submit</button><br><br>
            
        </form>
        
        <p>

        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {  ?>

        First Name: <?php echo $_REQUEST['fname']; ?> <br/>
        
        <?php } ?>  

        <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {  ?>

        Last Name: <?php echo $_REQUEST['lname']; ?> <br/>

        <?php } ?>  


        </p>

       
	  

   </section>

 <?php 

include 'footer.php'; 

?>
