<?php 

include 'header.php'; 
//setcookie('visited',"",time()-300);

?>

   <section class="maincontent">
 
     <?php
	 
	 /* if(isset($_POST['text']))
	  {
		  global $txt;
		  $txt=$_POST['text'];
		  //echo ucwords($txt);
		  //echo ucfirst($txt);
		  //echo strtolower($txt);
		  //echo ucwords($txt);
		  
		 // echo trim($txt);
		 // echo trim($txt," .");
		  //echo ltrim($txt," .");
		 // echo rtrim($txt," .");
		 
	  }*/
	  
	 // require "datatime.php";
	 // require "datatime.php";
	  require_once "datatime.php";
	  
	  ?>  
	  <form action="casechange.php" method="post">
	  
	  <input type="text" name="text" value="<?php global $txt; echo $txt; ?>" />
	  <input type="submit" value="submit"/>
	  
	  
	  </form>

   </section>

 <?php include 'footer.php';?>