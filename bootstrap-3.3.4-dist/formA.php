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
<form class="form-horizontal" role="form" action="phpform.php" method="POST">

<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Name:</label>
		<div class="col-sm-7">																		
		<input type="text" class="form-control" id="name" name="name" placeholder="first and lastname"
		value="<?php if (isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>">
		 <?php 
		 $errName='please enter a valid name address';
		 echo "<p class='text-danger'>".$errName."</p>";
		 ?>
	</div>
</div>

<div class="form-group">
	<label for="email" class="col-sm-2 control-label">Email:</label>
		<div class="col-sm-7">																					 
		<input type="text" class="form-control" id="email" name="email" placeholder="example@yahoo.com">
		<?php 
		$errEmail='please enter a valid email address';
		echo "<p class='text-danger'>$errEmail</p>";
		 ?>
	</div>
</div>

<div class="form-group">
	<label for="password" class="col-sm-2 control-label">Password:</label>
		<div class="col-sm-7">																					 
		<input type="password" class="form-control" id="password" name="password" placeholder="enter your password"
		value="<?php if (isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>">
	</div>
</div>

<div class="form-group">
	<label for="repassword" class="col-sm-2 control-label">Repassword:</label>
		<div class="col-sm-7">																					 
		<input type="password" class="form-control" id="repassword" name="repassword" placeholder="enter your password">
		<?php
		$errPassword='please enter a valid password address'; 
		echo "<p class='text-danger'>$errPassword</p>"; 
		?>
	</div>
</div>

<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">	
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</div>
</div>

<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">	
		<!displays alerts>	
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