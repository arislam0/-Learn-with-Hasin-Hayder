<?php 

include 'header.php'; 
//setcookie('visited',"",time()-300);

?>

   <section class="maincontent">
 
     <?php
	 $name = array( 
     
    array(
        'id' =>'201',
        'first_name'=>'Akbor',
        'last_name' =>'Hossain'
    ),
    array(
        'id' =>'202',
        'first_name'=>'Ar',
        'last_name' =>'islam'
    ),
    array(
        'id' =>'203',
        'first_name'=>'Rifat',
        'last_name' =>'Islam'
    )

);

$lastname = array_column($name,'id','last_name');

print_r($lastname);
	  
	  ?>  
	  

   </section>

 <?php include 'footer.php';?>