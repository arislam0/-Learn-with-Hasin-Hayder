<?php

$string = "I am a boy";
$reverse = "";
$tem = "";

for($i=0; $i<strlen($string); $i++)
{
  if($string[$i]==" "){
    $reverse.=$tem." ";
    $tem="";
  }
  $tem = $string[$i].$tem;
}
$reverse.=$tem;
echo $reverse;