<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head> 
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Registration</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="start.css" rel="stylesheet">
</head>

<body>
<div id="wrapper-fluid">
<div class "container-responsive">
<h1><u>MEMBERSHIP REGISTRATION</u></h1>
<form class="form-horizontal" role="form" action='start.php' method='POST'>

<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Name:</label>
		<div class="col-sm-7">			
		 	<input type="text" class="form-control" id="name" name="firstname" placeholder="first and lastname" 
		 		value="<?php echo $_SESSION['name'];?>">
		 		
	</div>
</div>

<div class="form-group">
	<label for="email" class="col-sm-2 control-label">Email:</label>
		<div class="col-sm-7">								
			<input type="text" class="form-control" name="email" placeholder="example@yahoo.com" value="<?php echo $_SESSION['email'];?>">
		
	</div>
</div>

<div class="form-group">
	<label for="password" class="col-sm-2 control-label">Password:</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="password" placeholder="enter your password" value="">
	</div>
</div>

<div class="form-group">
	<label for="repassword" class="col-sm-2 control-label">Repassword:</label>
	<div class="col-sm-7">
		<input type="password" class="form-control" name="repassword" placeholder="enter your password" value="">
		
	</div>
</div>

<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">	
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</div>
</div>

<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">	
		<!-- displays alerts> -->	
		</div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</body>
<footer>
	
</footer>
</html>