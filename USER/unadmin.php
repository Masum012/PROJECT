<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}


$user_id=$_POST['user_id'];echo $_POST['user_id'];;
$sql="UPDATE register SET admin='0' WHERE user_id='$user_id'";
mysql_query($sql);
header("Location:members.php");
?>