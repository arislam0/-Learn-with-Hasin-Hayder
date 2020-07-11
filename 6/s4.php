<?php
$string ="Hello World";
$length=strlen($string)-1;

for($i=$length; $i>=0; $i--)
{
 echo $string[$i];
}

echo PHP_EOL;

$length= strlen($string);

for($i=1; $i<=$length; $i++){
  echo $string[$i*-1];
}

echo PHP_EOL;

echo strrev($string);

echo PHP_EOL;

$string = "I am a boy";
$reversed = "";
$tmp = "";

for($i = 0; $i < strlen($string); $i++) {

    if($string[$i] == " ") {
        $reversed .= $tmp . " ";
       //print $reversed . PHP_EOL;
        $tmp = "";
        // print $tmp . PHP_EOL;
        continue;
    }
   //print $reversed . PHP_EOL;
    $tmp = $string[$i] . $tmp;  
  // print $reversed . PHP_EOL;  
}
//print $reversed . PHP_EOL;
$reversed .= $tmp;
print $reversed . PHP_EOL;