<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}

				$post_id=$_GET['like'];
				$like=$_SESSION['id'];
				$sql="INSERT INTO post_like(`post_id`,`liked_by`) VALUES('$post_id','$like')";
				mysql_query($sql);
				$likes=0;
				$rows=mysql_query("SELECT COUNT(post_id) FROM post_like WHERE post_id='$post_id'");
				$likes = mysql_fetch_array($rows);
				
				if($likes[0]<2)
								echo "You like this";
								else
								echo $likes[0] ."  including you like this";
				//header("location:afterlogin_user.php");
?>