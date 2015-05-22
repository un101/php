<?php
session_start();
#print_r($_POST);
#var_dump($_GET);
$servername="localhost";
$username="root";
$password="";
$dbnane="members";
$conn = mysqli_connect("localhost","root","","members");
if (!$conn)
{
	die("could not connect:".mysqli_connect_error($conn));
}
else 
{
#echo "success";
#creating a database worked 
#$sql ="CREATE DATABASE members";
#if (mysqli_query($conn, $sql))
#{
#echo "database success";
#}
#else 
#{
#echo "database creation error". mysqli_error($conn);
#}
#mysqli_close($conn);
#$sql = "CREATE TABLE register (name varchar(25),
	#email varchar(25) NOT NULL, password varchar(15) NOT NULL,
	#repassword varchar(15) NOT NULL)";
#if (mysqli_query($conn,$sql))
#{
#	echo "table created";
#}
#else 
#{
#	echo"error";
#}
mysqli_select_db(($conn),'members');
if (isset($_POST['name']))
{
	# code...
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$repassword=md5($_POST['repassword']);

	$sql ="INSERT INTO register(name,email,password,repassword)
		values('{$name}','{$email}','{$password}','{$repassword}')";

#password validation
if (($_POST["password"]== '') || ($_POST["password"]!==$_POST["repassword"]))
	{
		#die('password mismatch:'/*.mysqli_error($conn)*/ );
		// echo (window.location = "locsnew.html")	;
		#die("password mismatch");	
		header("Location: http://localhost/anne101/start2.html");
		die();
	}
	else
	{
		echo "record saved correctlly";
	}
	#$result=mysqli_query($conn,$sql);

#sql connection
	if (!mysqli_query($conn,$sql))
	{
		die('error:'.mysqli_error($conn));
		#var_dump($sql);
	}
	else
	{
		echo "record saved correctly";
	}
}
 else 
{
	echo 'no data obtained from post';
}
#('kelvin','kelvin@yahoo.com','kelvin640','kelvin640')";
#if (mysqli_query($conn,$sql))
#{
#	echo"record saved";
#}
#else
#{
#	echo"error:".$sql."<br>".mysqli_error($conn);
#}
/*if (!$result)
{
	echo"error:".$sql."<br>".mysqli_error($conn);
}
else
{
	echo"record saved";
}
*/
}
mysqli_close($conn);
?>