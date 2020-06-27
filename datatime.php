<?php
$fonts="vendana";
$bgcolor="#444";
$fontcolor="#fff";
$flag=0;

?>

<!doctype html>
<html>

<head>
       <title> PHP syntax</title>
	   
	   <style>
	   
	       .phpcode{ width:900px; margin: 0 auto; background:<?php echo "#ddd" ?>;}
		   
		   .headeroption, .footeroption{background:#444;color:#fff;text-align:center;padding:20px;}
		   
		   .headeroption h2,.footeroption h2{margin: 0;}
		   
		   .maincontent{ min-height:500px;padding:20px;}
	       P{margin:0};
	   </style>
	   
</head>

<body>
     
<div class="phpcode">
	
   <section class="headeroption">

        <h2> <?php echo "AR ISLAM" ?> </h2>

   </section>

   <section class="maincontent">
   <hr/>
   PHP Date and Time
   <span style="float:right">
     <?php
	  
	  date_default_timezone_set('Asia/Dhaka');
	  echo "Time is ".date("h:i;sa");
	 
	 ?>
	 
   </span>
 <hr/>
 
    <?php
	   
	   echo "Today is ".date("d-m-Y")."<br/>";
	   echo "Today is ".date("l")."<br/>";
	   echo "Default Time is ".date("h:i:sa")."<br/>";
	   
	   date_default_timezone_set('Asia/Dhaka');
	
      echo "bd time is ".date("h:i:sa")."<br/>";
	  
	  echo date_default_timezone_get()."<br/>"
	
	?>

   </section>

    <section class="footeroption">
	        
			<p>&copy; <?php echo date("Y")?> AR ISLAM </p>

            <h2> <?php echo "www.arislam.com" ?> </h2>

    </section>
	 


</div>
</body>
</html>
