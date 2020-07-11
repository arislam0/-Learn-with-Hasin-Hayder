<?php
// setcookie( 'username', 'hulk', time() + 40 );
// setcookie( 'username', 'hulk', 1 ); //delete 1
// setcookie( 'username', 'hulk', time() + 300, 'localhost/PHP/8/pwd.php' );

// setcookie( 'username', 'hello world', time() + 300 );
// echo $_COOKIE['username'];

setcookie( 'data', 'hello world', time() + 300 );
setrawcookie( 'data2', rawurlencode( 'hello world' ), time() + 300 );

setcookie( 'array2', serialize( array( 'id' => 1, 'name' => 'Hasan' ) ), time() + 300 );
// setcookie( "array[id]", 1, time() + 300 );
// setcookie( "array[name]", 'Hasan', time() + 300 );

foreach ( unserialize( $_COOKIE['array2'] ) as $key => $value ) {
    echo $key . " = " . $value . "<br/>";
}

?>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

<script>
 // alert(Cookies.get('data'));
 alert(Cookies.get('data2'));
</script>