<?php
$filename = "D:/XAMPP-1/htdocs/php/7/t8.txt";

$students = array(

    array(
        'fname' =>'Shahin',
        'lname' =>'Ahmed',
        'age'   =>12,
        'class' =>7,
        'roll'  =>11
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13
    ),

    array(
        'fname' =>'Nikjil',
        'lname' =>'Chandra',
        'age'   =>12,
        'class' =>7,
        'roll'  =>14
    ),
);

// $encodedData = json_encode($students);
// file_put_contents($filename,$encodedData,LOCK_EX); //object hisebe


$data = file_get_contents($filename);
$allStudents = json_decode($data,true); //aray hisebe treat korbe true dile
print_r($allStudents);

// echo $allStudents[0]->fname;
 echo $allStudents[0]['fname'];