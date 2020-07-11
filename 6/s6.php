<?php
$string = "Quick brown Fox fox jumps over lazy dow";
$string1 = "Quick brown Fox fox jumps over lazy dow";

//echo strpos($string,"fox");
// echo stripos($string,"Quick");
 $offset = stripos($string,"Quick");

 if($offset!==false)
 {
  echo "\n word was found\n";
 }
 else
 {
   echo "\n word was not found\n";

 }

 $offset1=strripos($string1,"Fox");
 echo $offset1."\n";

 $offset1=strrpos($string1,"Fox");
 echo $offset1."\n";