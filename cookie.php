<?php 

include 'header.php'; 
setcookie('visited',"",time()-300);

?>

   <section class="maincontent">
 
     <?php
	 
	 echo "cookies deleted";
	 
	  /* 
	  if(!isset($_COOKIE['visited']) )
	   {
		   setcookie("visited","1",time()+86400,"/") or die("Could not set cookie");
		   echo "This is your first visit in the website";
	   }
	   else
	   {
		   echo "You are our old visitor";
	   } 
	   */
	 ?>


   </section>

 <?php include 'footer.php';?>