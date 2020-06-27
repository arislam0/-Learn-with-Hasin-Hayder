<?php 

include 'header.php'; 

/* <table>
	     <tr>
		    <td>Filter Name</td>
	       <td>Filter ID</td>
		 </tr>
		  <?php
		  
		  foreach(filter_list() as $id =>$filter)
		  {
			  echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
		  }
		  
	      ?>	  
		  
	</table> */


?>

   <section class="maincontent">
 
       <?php
	    /*
		$str="<h2>I am Learing php.</h2>";
		$newstr=filter_var($str,FILTER_SANITIZE_STRING);
		echo $newstr;
		
		$int =50;
		//FILTER_VALIDATE_EMAIL,FILTER_VALIDATE_URL,FILTER_VALIDATE_IP;
		if(filter_var($int,FILTER_VALIDATE_INT)){
			echo "It is int value";
		}
		else
		{
			echo "It is not int value";
		}
		
		*/
		$intnum=300;
		$min=1;
		$max=200;
		if(filter_var($intnum,FILTER_VALIDATE_INT, 
		array( "options" => array("min_range"=>$min, "max_range"=>$max))))
		{
			echo "It is valid range";
		}
		else
		{
			echo "It is not valid range";
		}
		
		echo "<br/>";
		$url ="https://www.trainingwithliveproject.com";
		
		//$url ="https://www.example.com/index.html?q=123";
		if(filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED))
		{
			echo "This url is valid";
		}
		else{
			echo "It has not query string";
		}
		

		
	   ?>     
    
 

   </section>

 <?php include 'footer.php';?>