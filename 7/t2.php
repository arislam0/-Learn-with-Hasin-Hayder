<?php

$filename = "D:/XAMPP-1/htdocs/php/7/t2.txt";
if ( is_writable( $filename ) ) {

    // $existingData = file_get_contents($filename);

// $fp = fopen($filename,"w");
    $fp = fopen( $filename, "a" );
// $fp = fopen($filename,"r");
    // echo getcwd();
    // fwrite($fp,"Mercury\n");

// fwrite($fp,$existingData);
    fwrite( $fp, "Mercury\n" );
    fwrite( $fp, "Venus\n" );
    fwrite( $fp, "Earth\n" );

    fclose( $fp );
}