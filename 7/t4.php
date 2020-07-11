<?php

$filename = "D:/XAMPP-1/htdocs/php/7/t4.txt";
// $fp = fopen($filename,"r+");
// $line=fgets($fp);
// echo $line;

// fwrite($fp,"Uranus\n");

// $line=fgets($fp);
// echo $line;
// fseek($fp,0);
// fwrite($fp,"venus");
// fclose($fp);

$fp = fopen($filename,"a+");

fwrite($fp,"Uranus\n");
rewind($fp);

fwrite($fp,"Neptune\n");

$line= fgets($fp);
echo $line;
