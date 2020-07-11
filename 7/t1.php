<?php
$filename = "D:/XAMPP-1/htdocs/php/7/t1.txt";

if(is_readable($filename))
{
   
 //echo getcwd();
$fp =fopen($filename,'r');
// $line= fgets($fp);
// echo $line;
// // $line= fgets($fp,5);
// $line= fgets($fp);
// echo $line;
// $line= fgets($fp);
// echo $line;

while($line = fgets($fp))
{
  echo $line;
}


rewind($fp);

// fseek($fp,8);

fseek($fp,-1,SEEK_END);

while($line = fgets($fp,5) )
{
  echo $line."-";
}

fclose($fp);

// $data= file($filename);
// echo $data[2];
// print_r($data);

$data= file_get_contents($filename);
echo $data."\n";


}