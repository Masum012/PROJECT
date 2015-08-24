<?php
session_start();
	include "db.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM register WHERE username='$username' AND password='$password'";
	
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{
			if($row['admin']==1)
			{$_SESSION['admin']=1;}
			if($row['user_id'])
			{
				$_SESSION['id']=$row['user_id'];
				if(isset($_POST['checkbox']))
				{
					setcookie("association",$_SESSION['id'] , time()+1000,"/");
				}
				;
				die(header("Location: ../USER/afterlogin_user.php"));
			}
		}	
		//echo "Invalid username or password";
		$_SESSION['error']="Invalid username or password";
		header("Location:login.php");
		
?>