<?php
$string = "Et nonumy elitr clita erat labore sit dolor no, duo clita consetetur vero amet.rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr Sanctus vero lorem ut takimata erat eos sed rebum dolores, et amet takimata sit dolor voluptua at aliquyam voluptua labore, kasd invidunt sit rebum invidunt nonumy aliquyam sed ipsum, gubergren dolores sit et sed eos ut.";

//echo wordwrap($string,26);
//echo wordwrap($string,26,"\n",true);


// https://www.php.net/manual/en/function.wordwrap

$text = "A very long woooooooooooooooooord. and something";
$newtext = wordwrap($text, 8, "\n", false);

//echo "$newtext\n";

$text = "A very long woooooooooooord.";
$newtext = wordwrap($text, 8, "\n", true);

echo "$newtext\n";