<?php include 'header.php'; ?>

   <section class="maincontent">
 
     <?php
	 
	 $createfile = fopen("new.txt","w") or die("File is not found!!");;
	 $one= "Delowar J Imran t\n";
	 fwrite($createfile,$one);
	 
	 $two="Akbar Hossain";
	 fwrite($createfile,$two);
	 fclose($createfile);
	 
	   /*$ourfile = fopen("test.txt", "r") or die("File is not found!!");
	  //echo fgets($ourfile,filesize("test.txt"))."<br/>";
	  //echo fgetc($ourfile)."<br/>";
	   while(!feof($ourfile))
	   {
		   //echo fgetc($ourfile)."<br/>";
		   echo fgets($ourfile,filesize("test.txt"))."<br/>";
		   //echo fgetc($ourfile)."<br/>";
	   }
	   //echo fread($ourfile,filesize("test.txt"));

	   fclose($ourfile); */
	   
	 ?>


   </section>

 <?php include 'footer.php';?>