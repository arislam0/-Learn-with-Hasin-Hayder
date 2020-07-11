<?php

session_start( [
    'cookie_lifetime' => 300,
] );
// session_destroy();
$error = false;

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    if ( 'admin' == $_POST['username'] && 'a51e47f646375ab6bf5dd2c42d3e6181' == md5( $_POST['password'] ) ) {
        $_SESSION['loggedin'] = true;

    } else {

        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if ( isset( $_POST['logout'] ) ) {

    $_SESSION['loggedin'] = false;
    session_destroy();

}

?>

<!doctype html>
<html>

<head>
       <title>Form Example</title>
		  	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

	   <style>

	     body{ margin-top:30px

      };

	   </style>

</head>

<body>
<div class="container">

<div class="row">
<div class="column column-60 column-offset-20">
<h2>Simple Auth Example</h2>

     </div>
     </div>

     <div class="row">
        <div class="column column-60 column-offset-20">
         <?php
// echo md5( "rabbit" ) . "<br>";
// echo sha1( "rabbit" ) . "<br>";
// echo HASH( "sha256", "rabbit" ) . "<br>";
// echo HASH( "sha512", "rabbit" ) . "<br>";

if ( isset( $_SESSION['loggedin'] ) == true ) {
    echo "Hello Admin, Welcome!";
} else {
    echo "Hello Stranger, Login Below";
}
?>
       </div>
     </div>
     <br/>
     <br/>

     <div class="row">
        <div class="column column-60 column-offset-20">
         <?php
if ( $error ) {
    echo "<blockquote>Username and Password didn't match</<blockquote>";
}
if ( $_SESSION['loggedin'] == false ) { //see it
    ?>
</br>
</br>
        <form method="POST">
         <label for="username">Username</label>
         <input type="text" name="username" id="username">

         <label for="password">Password</label>
         <input type="password" name="password" id="password">

         <button type="submit" class="button-primary" name="submit">Log In</button>

        </form>
       <?php
} else {
    ?>

       <form action="n3.php" method="POST">

         <input type="hidden" name="logout" value="1">
         <button type="submit" class="button-primary" name="submit">Log Out</button>

        </form>

       <?php
}
?>

       </div>
     </div>

</div>
</body>
</html>