<?php
$filename = "D:/XAMPP-1/htdocs/php/7/t5.txt";

// file_put_contents($filename,"Mars\n",FILE_APPEND);
// file_put_contents($filename,"Jupiter\n",FILE_APPEND);

file_put_contents($filename,"Mars\n",FILE_APPEND | LOCK_EX);
file_put_contents($filename,"Jupiter\n",FILE_APPEND | LOCK_EX);