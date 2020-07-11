<?php
// https://www.php.net/manual/en/function.substr.php

$string = "Hello World";
echo $string[0];
echo "\n";
echo $string[-5];
echo "\n";
echo substr($string,1,4);
echo "\n";

$lenght=strlen($string);
echo substr($string,$lenght-3);
echo "\n";
echo substr($string,-3);
echo "\n";
echo substr($string,-3,-1);
echo "\n";

$rest =  substr("abcdef", 1,-1);
echo "$rest \n";

var_dump(substr('abb', 2));