<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}


echo $event_id=$_GET['event_id'];
$sql="DELETE FROM event_table WHERE event_id='$event_id'";
mysql_query($sql);
header("Location:events_user.php?click=0");
?>