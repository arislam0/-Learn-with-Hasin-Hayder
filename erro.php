<?php 

include 'header.php'; 
setcookie('visited',"",time()-300);

?>

   <section class="maincontent">
 
     <?php
	 
	  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	  $price=45;
	  if($price==45)
	  {
		  print "The price is $price";
	  }
	  else
	  {
		  print "The price is not 45";
	  }
	 ?>


   </section>

 <?php include 'footer.php';?>