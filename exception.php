<?php 

include 'header.php'; 
setcookie('visited',"",time()-300);
//$mystr= "we are learing php";
// print_r(explode(" ",$mystr));
//$mystr= array("we", "are", "learing", "php");
//echo implode(", ",$mystr);
	  

?>

   <section class="maincontent">
 
     <?php
	 
	  function numCheck($num){
		  if($num != 5){
		  throw new Exception("Number is not 5");
		  }
		  return true;
	  }
	  try{
		  numCheck(5);
		  echo "Yes you  have done";
	  }
	  catch(Exception $e)
	  {
		  echo "Error: ".$e->getMessage();
	  }
	  
	  
	 ?>


   </section>

 <?php include 'footer.php';?>