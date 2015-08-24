
<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}


$id=$_SESSION['id'];
if($_GET['n_p']!=$_GET['r_n_p']){
?>
<p color="red">re-enter correct password</p>
<?php
}

else
{
	$new=$_GET['n_p'];
	$sql="SELECT * FROM register WHERE user_id='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$pass=$row['password'];
	}
	if($pass==$_GET['o_p'])
	{
		$sql1="UPDATE register SET password='$new' WHERE user_id='$id'";
		mysql_query($sql1);
		?>
<p color="green">password changed successfully.</p>
<?php
	}
	else
	{
?>
<p color="red">enter correct password</p>
<?php
	}
}
?>


