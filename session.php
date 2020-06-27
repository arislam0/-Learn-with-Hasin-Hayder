<?php 
session_start();
include 'header.php'; 

?>

   <section class="maincontent">
 
     <?php
	 
	   $_SESSION['user'] = " ar";
	   $_SESSION['password'] = " 123";
	   //session_unset();
	   echo "Username is ".$_SESSION['user']."<br/>";
	   
	   echo "Password is ".$_SESSION['password']."<br/>";
	   session_destroy();
	 ?>


   </section>

 <?php include 'footer.php';?>