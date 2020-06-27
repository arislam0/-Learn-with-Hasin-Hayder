	<?php

$a="infinity flame";
$b=" soft";


 echo $a.$b;
 echo "<br>";
 
 
$x = 5;
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";

var_dump($x,$y);

echo "<br>";

$fruits=array("apple","orange","banana");

var_dump($fruits);

echo "<br>";
echo "<br>";

class student{
	function department(){
		
		echo "cse";
	}
	function details(){
		
		echo "450";
		
	}
	
}
 $st=new student();
 $st->department();
 $st->details();

?>