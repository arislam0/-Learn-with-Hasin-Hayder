<?php

$string = "Hello World,World How are you";

$parts = explode(" ",$string);

print_r($parts);
echo PHP_EOL;

$original =join(" ",$parts);
echo $original;
echo PHP_EOL;

$original = implode(" ",$parts);
echo $original;
echo PHP_EOL;

// $parts2= str_split($string);
// print_r($parts2);

$parts3 = strtok($string," ,");
while($parts3!== false){
  echo $parts3."\n"; //iterator not count word https://www.php.net/manual/en/function.strtok.php
}
echo PHP_EOL;

$parts5= preg_split("/\s|,/",$string);

print_r($parts5);