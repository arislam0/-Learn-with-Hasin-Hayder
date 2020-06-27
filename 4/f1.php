<!doctype html>
<html>

<head>
       <title>Hello World</title>
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
<h1>Wellcome</h1>

<p>
Voluptua sit no amet accusam amet sea diam ea takimata dolor. Eos erat ut sed dolor clita tempor sit clita.
</p>

<form method="POST"  enctype="multipart/form-data">

<label for="fname">First Name</label>
<input type="text" name="fname" id="fname">


<label for="lname">Last Name</label>
<input type="text" name="lname" id="lname">


<label for="photo">Photo</label><br/>
<input type="file" name="photo[]" id="photo"><br/>
<input type="file" name="photo[]" id="photo"><br/>
<input type="file" name="photo[]" id="photo"><br/>


<button type="submit">Submit</button><br/>


</form>

</div>

</div>

</div>

</body>
</html>