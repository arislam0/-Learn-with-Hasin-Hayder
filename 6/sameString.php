<?php

$string = "Hello wrold,wrold how are you";
$string=strtolower($string);

$parts = str_split($string);

$length = strlen($string);

$parts2=array();
$parts3=array();
$k=0;
sort($parts);
$c=0;
for($i=0; $i<$length;$i++)
{
   $c=1;
  for($j=$i+1; $j<$length; $j++)
  {
     if($parts[$i]==$parts[$j]){
            $c++;
     }
   }
   $parts2[$k]=$c;
   $parts3[$k]=$parts[$i];
   $k++;
}

$c=array_combine($parts3,$parts2);
print_r($c);


// for($i=0; $i<$length; $i++)
// {
//  $c=1;
//   for($j=$i+1; $j<$length; $j++)
//   {
//      if($string[$i]==$string[$j]){
//             $c++;
//      }
//   }
//   $parts2[$k] = $string[$i];
//   $parts3[$k]= $c;
//   $k++;
// }
