<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
$user_id=$_POST['alumny_id'];echo $_POST['user_id'];;
$sql="UPDATE register SET alumny='1' WHERE user_id='$user_id'";
mysql_query($sql);
header("Location:members.php");
//sfhagfdbvcbvbvbvcbvbgfygasdyfgdayufguydgfuydafuydfuydsgfuygdyfu fsadfasdfsafasfdsafdafdf 
//sdasfdhasjkfhajdkfh
?>