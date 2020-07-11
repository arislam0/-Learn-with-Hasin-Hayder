<?php

session_name( 'myapp' );
session_start( [
    'cookie_lifetime' => 60,
]
);
$_SESSION['name'] = 'Ruby';
echo $_SESSION['name'];
// session_destroy();

// session_start();
// // $_SESSION['name'] = 'Helen';
// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// // echo $_SESSION['name'];
// $_SESSION['counter']++;
// echo $_SESSION['counter'];
// // session_destroy();