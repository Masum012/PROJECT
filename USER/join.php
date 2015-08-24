<?php 
	session_start();
	include "../ALL/db.php";
	if(!isset($_SESSION['id']))
	{
		header("Location:../ALL/login.php");
		die();
	}
	$user_id=$_SESSION['id'];
	$event_id=$_GET['event'];
	$sql="INSERT INTO event_effect(event_id,going)VALUES('$event_id','$user_id')";
	mysql_query($sql);
	//header("location:events_user.php");
	$going=0;
	 $rows=mysql_query("SELECT COUNT(event_id) FROM event_effect WHERE event_id='$event_id'");
	$going = mysql_fetch_array($rows);
	
									if($going[0]<2)
								echo "You are going";
								else
								echo $going[0] ."  including you are going";
?>

