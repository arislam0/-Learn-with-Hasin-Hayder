<?php

$string = "Quick brown Brown Fox fox jumps over the lazy dog";

// $replacedString = str_replace('brown','red',$string);
// echo $replacedString;
// echo PHP_EOL;
// echo $string;

// $replacedString = str_ireplace('brown','red',$string);
// echo $replacedString;
// echo PHP_EOL;

// $replacedString = str_ireplace('brown','red',$string,$count);
// echo $replacedString;
// echo PHP_EOL;
// echo "Total Replacement: {$count}"."\n";

// $string=str_ireplace("brown","red",$string,$count);
// echo $string;

// $string=str_replace(array('brown','fox'),array('red','cat'),$string,$count);
// echo $string;
// echo PHP_EOL;
// echo "Total Replacement: $count \n";

$string=str_ireplace(array('brown','fox','dog'),array('red','cat','hen'),$string,$count);
echo $string;
echo PHP_EOL;
echo "Total Replacement: $count \n";
