<?php
$string= " hello \n,";

//$string=trim($string," ");
//$string=trim($string);

// $string=trim($string," ,");
 $string=rtrim($string," ,");
 $string=ltrim($string," ,");


echo $string;
echo "data:";