<html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name=$_POST['Username'];

	$pass=$_POST['pass'];

if (empty($name)||empty($pass)){
		echo 'name or is empty';
	}
	else{
		echo $name;
		echo "<br>";
		echo $pass;
	}

}

echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<br>";
?>


<body>

<form method="post" action="">
 UserName: <input type="text" name="Username">
 password: <input type="password" name="pass">
 <input type="submit" value="submit">
 
</form>
 </body>
 </html>