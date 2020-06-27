<?php
$fonts="vendana";
$bgcolor="#444";
$fontcolor="#fff";
$flag=0;

$errname=$erremail=$errwebsite=$errcomment=$errgender="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
		 {
			 if(empty($_POST["name"]))
			 {
				 $errname="<span style='color:red'>Name is required.</span>";
			 }
			 else
			 {
			    $name=validate($_POST["name"]);
				
			 }
			 
			 if(empty($_POST["email"]) )
			 {
				 $erremail="<span style='color:red'>E-mail is required.</span>";
			 }
			 else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) )
			 {
				 $erremail="<span style='color:red'>Invalid E-mail format.</span>";
			 }
			 else
			 {
			   $email=validate($_POST["email"]);
			   
			 }
			 
			 if(empty( $_POST["website"]) )
			 {
				 $errwebsite="<span style='color:red'>Website is required.</span>";
			 }
			 else if(!filter_var($_POST["website"], FILTER_VALIDATE_URL) )
			 {
				 $errwebsite="<span style='color:red'>Invalid website format.</span>";
			 }
			 else
			 {
			   $website=validate($_POST["website"]);
			   
			 }
			 
			  if(empty( $_POST["gender"]) )
			 {
				 $errgender="<span style='color:red'>Gendar is required.</span>";
			 }
			 else
			 {
			 $gender=validate($_POST["gender"]);
			 $flag=1;
			 
			 }
			 
			 
			 $comment = validate($_POST["comment"]);
			 
			
			
		 }
		 
		 function validate($data){
			 
			 $data=trim($data);
			 $data=stripcslashes($data);
			 $data=htmlspecialchars($data);
			 
			 return $data;
		 }
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
	   
	   </style>
	   
</head>

<body>
     
<div class="phpcode">
	
   <section class="headeroption">

        <h2> <?php echo "AR ISLAM" ?> </h2>

   </section>

   <section class="maincontent">
 
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		
		<table>
		
		<p style="color:red">* Required Field</p>
		
		    <tr>
			  <td>Name</td>
			  <td><input type="text" name="name"/>
			  *<?php echo $errname;?></td>
			</tr>
			
			<tr>
			  <td>E-mail</td>
			  <td><input type="text" name="email" />
			  *<?php echo $erremail;?>
			  </td>
			</tr>
			
			<tr>
			  <td>Website</td>
			  <td><input type="text" name="website"/>
			  *<?php echo $errwebsite;?>
			  </td>
			</tr>
			
			<tr>
			  <td>Comment</td>
			  <td>
			  <textarea name="comment" rows="5" cols="40">
			  </textarea>
 			  </td>
			</tr>
			
			<tr>
			  <td>Gendar</td>
			  <td>
			  <input type="radio" name="gender" value="male"/>Male
			  <input type="radio" name="gender" value="female"/>Female
			  *<?php echo $errgender;?></td>
			  </td>
			</tr>
			
			<tr>
			  <td></td>
			  <td><input type="submit" name="submit" value="submit"/></td>
			</tr>
			
		</table>
		</form>
		
		
		<?php
		
		/*if($flag==1)
		{
			 echo "Name: ".$name."<br/>";
			 echo "E-mail: ".$email."<br/>";
			 echo "Website: ".$website."<br/>";
			 echo "Comment: ".$comment."<br/>";
			 echo "Gendar: ".$gender."<br/>";
			 $flag=0;
			
		}
		else{
			echo ""."<br/>";;
		}*/
		     
		
		?>
	
	     	

   </section>

    <section class="footeroption">

            <h2> <?php echo "www.arislam.com" ?> </h2>

    </section>
	 


</div>
</body>
</html>
