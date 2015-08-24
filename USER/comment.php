<?php
session_start();
include "../ALL/db.php";
	//die($_GET['post_id']." ".$_GET['comment']);
	$comment_text=$_GET['comment'];
	$time1=gmdate("D, d M Y H:i:s A") ;
	$user_id=$_SESSION['id'];
	$post=$_GET['post_id'];
	$sql="INSERT INTO comment_id (comment_text,time,post_id,user_id) VALUES('$comment_text','$time1','$post','$user_id')";
	$result=mysql_query($sql); 
	$sql1="SELECT * FROM comment_id WHERE time='$time1' AND user_id='$user_id' AND post_id='$post'";
	$result1=mysql_query($sql1);
	while($row1=mysql_fetch_array($result1))
						{ 
							$sql3="SELECT username FROM register  WHERE user_id='$user_id' ";
							$result3=mysql_query($sql3);
							while($row3=mysql_fetch_array($result3))
							{
								$username=$row3['username'];
							} 
						
						?>
							<fieldset class="previous_comment" id="previous_comment" style="width:625px; border-radius:5px;">
								<b style="color:blue;"><?php echo $username; ?> </b>
								<p><?php echo $row1['comment_text'];  ?>  <?php echo $row1['time']; ?></p>
							</fieldset>
						<?php } 
?>