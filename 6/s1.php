<?php
/*https://www.php.net/manual/en/language.types.string.php
heredoc syntax
nowdoc syntax 
*/

$name= "Rakib";

$string01= 'My name is $name \n \t new data';

echo $string01;
echo "\n";

$string02= "My name is $name \n \t new data";

echo $string02;
echo "\n\n";

$heredpc= <<<EOD
data 1
new line $name\n
more text
EOD;

echo $heredpc."\n";


$heredpc1= <<<'EOD'
data 1
new line $name\n
more text
EOD;

echo $heredpc1."\n";