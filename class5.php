<html>
<?php

$errname = $erremail = $errwebsite = $errcomment = $errgender = "";

$name = $email = $website = $comment = $gender = "";

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    if ( empty( $_POST['name'] ) ) {
        $errname = "Name is required";
    } else {
        $name = $_POST['name'];
    }

    if ( empty( $_POST['email'] ) ) {
        $erremail = "email is required";
    } elseif ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {

        $erremail = "invalid email"; 
    } else {
        $email = $_POST['email'];
    }

    if ( empty( $_POST['website'] ) ) {
        $errwebsite = "website is required";
    } elseif ( !filter_var( $_POST['website'], FILTER_VALIDATE_URL ) ) {

        $errwebsite = "invalid URL";
    } else {
        $website = $_POST['website'];
    }

    if ( empty( $_POST['comment'] ) ) {
        $errcomment = "comment is required";
    } else {
        $comment = $_POST['comment'];
    }

    if ( empty( $_POST['gender'] ) ) {
        $errgender = "gender is required";
    } else {
        $gender = $_POST['gender'];
				}
				

				echo $name."<br>"; 
				echo $email."<br>";
				echo $website."<br>";
				echo $comment."<br>";
				echo $gender."<br>";

				echo "<br>"; 
				echo "<br>";
			}
				

?>


<form action="" method="post">
Name: <input type="text" name="name">
<span class="error">*<?php echo $errname ?></span>
<br/>

E-mail: <input type="text" name="email">
<span class="error">*<?php echo $erremail; ?></span>
<br/>

Website: <input type="text" name="website">
<span class="error">*<?php echo $errwebsite; ?></span>
<br/>

Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<span class="error">*<?php echo $errcomment; ?></span>
<br/>

Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">*<?php echo $errgender; ?></span>
<br/>

<input type="submit"  value="submit">

</form>

</html>
