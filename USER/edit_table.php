<?php
session_start();
	include "../ALL/db.php";
	if(!isset($_SESSION['id']))
	{
		header("Location:../ALL/login.php");
		die();
	}
	$username=$_POST['username'];
	$school=$_POST['school'];
	$college=$_POST['college'];
	$university=$_POST['university'];
	$gender=$_POST['sex'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$date_of_birth=$_POST['date_of_birth'];
	$user_id=$_SESSION['id'];
	  if(basename($_FILES["cover"]["name"])){
	  $timezone = date("D, d M Y H:i:s A");
	  $prefix1=$_SESSION['id'].time();
	  $link1="../upload/".$prefix1. basename($_FILES["cover"]["name"]);
	  move_uploaded_file($_FILES["cover"]["tmp_name"],$link1);
	//echo $link1;
	  }	
	  if(basename($_FILES["pic"]["name"])){
	  $prefix2=$_SESSION['id'].time();
	  $link2="../upload/".$prefix2. basename($_FILES["pic"]["name"]);
	  move_uploaded_file($_FILES["pic"]["tmp_name"],$link2);
	  }
	
	if(isset($link1)&&isset($link2))
	$sql="UPDATE register SET pro_pic='$link2', cover_photo='$link1', username='$username', school='$school',college='$college',university='$university',gender='$gender',telephone='$telephone',email='$email',date_of_birth='$date_of_birth' WHERE user_id='$user_id';";
	else if(isset($link1))
	{echo $link1;
		$sql="UPDATE register SET  cover_photo='$link1', username='$username', school='$school',college='$college',university='$university',gender='$gender',telephone='$telephone',email='$email',date_of_birth='$date_of_birth' WHERE user_id='$user_id';";
	}
	else if(isset($link2))
		$sql="UPDATE register SET pro_pic='$link2',  username='$username', school='$school',college='$college',university='$university',gender='$gender',telephone='$telephone',email='$email',date_of_birth='$date_of_birth' WHERE user_id='$user_id';";
	else
		$sql="UPDATE register SET username='$username', school='$school',college='$college',university='$university',gender='$gender',telephone='$telephone',email='$email',date_of_birth='$date_of_birth' WHERE user_id='$user_id';";

	mysql_query($sql);
	header("Location:about.php?user_id=$user_id");
?>