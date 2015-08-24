<?php
	echo $id=$_GET['comment'];
	$sql1="DELETE FROM comment_id WHERE comment_id='$id'";
	mysql_query($sql1);
	header("Location:afterlogin_user.php");
?>