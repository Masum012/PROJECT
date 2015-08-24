<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
$post_id=$_POST['post_id'];
$sql="DELETE FROM post WHERE post_id='$post_id'";
$sql1="DELETE FROM comment_id WHERE post_id='$post_id'";
mysql_query($sql);
mysql_query($sql1);
header("Location:../USER/afterlogin_user.php");
?>