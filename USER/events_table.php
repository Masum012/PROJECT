<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
?>


<?php
				$event=$_POST['event'];
				$details=$_POST['details'];
				$user_id=$_SESSION['id'];
				include "../ALL/db.php";
				$date=$_POST['date'];
				$time=$_POST['time'];
				$place=$_POST['place'];
				$prefix=$_SESSION['id'].time();
				$link="../upload/".$prefix. basename($_FILES["fileToUpload"]["name"]);
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$link);
				//$link1="http://localhost/PRPJECT/upload/".$prefix.$_FILES['fileToUpload']['name'];
				$sql="INSERT INTO event_table(event_title,details,user_id,date,time,place,link)VALUES('$event','$details','$user_id','$date','$time','$place','$link')";
				mysql_query($sql);
				header("location:events_user.php?click=0");
?>