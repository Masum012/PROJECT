<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
$user_id=$_POST['user_id'];
$sql="DELETE FROM register WHERE user_id='$user_id'";

mysql_query($sql);
$sql1="DELETE FROM post WHERE user_id='$user_id'";

mysql_query($sql1);
$sql2="DELETE FROM comment WHERE user_id='$user_id'";

mysql_query($sql2);
header("Location:afterlogin_user.php");
?>