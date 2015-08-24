<?php
	
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$date=$_POST['date'];
	$email=$_POST['mail'];
	$phone=$_POST['phone'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("association",$con);
	if($con){
	$sql="INSERT INTO register (username,password,date_of_birth,email,telephone)VALUES('$username','$password','$date','$email','$phone')";
		mysql_query($sql,$con);
	}
	else
	{
		echo "not_connected";
	}
	header("location:home.php");
?>