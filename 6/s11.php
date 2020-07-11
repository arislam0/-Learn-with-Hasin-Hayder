<?php

$name= "Abu Hossain 01234567891 abc@dcfg.com";
//$parts= sscanf($name,"%s %s %11d");

$parts= sscanf($name,"%s %s %11s %s");
print_r($parts);

sscanf($name,"%s %s %11s %s",$fname,$lname,$mobile,$email);

// echo $fname."\n";
echo $email."\n";

$hexColor= "#FF2F44";
sscanf($hexColor,"#%2x%2x%2x",$red,$green,$blue);
echo $blue;
