<?php
 session_start();
include "../ALL/db.php";
	$post=$_GET['post_id'];
	$sql1="SELECT * FROM comment_id WHERE post_id='$post'";
	$result1=mysql_query($sql1);
	while($row1=mysql_fetch_array($result1))
						{ 
						$user_id=$row1['user_id'];
						$c_id=$row1['comment_id'];
							$sql3="SELECT username FROM register  WHERE user_id='$user_id' ";
							$result3=mysql_query($sql3);
							while($row3=mysql_fetch_array($result3))
							{
								$username=$row3['username'];
							} 
						
						?>
						<script>
						function comment<?php echo $c_id; ?>()
						{
							var comment = <?php echo $c_id; ?>;
																	
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											//alert(event);
										}
									}
									xmlhttp.open("GET", "comment_delete.php?comment="+ comment , true);
									xmlhttp.send();
						}
						</script>
						
							<fieldset class="previous_comment" id="previous_comment" style="width:625px; border-radius:5px;">
								<b style="color:blue;"><?php echo $username; ?> </b>
								<?/* php
									if($user_id==$_SESSION['id'])
									{*/?>
									<!--<a href="comment_delete.php?comment=<?php echo $c_id; ?>"> <img  src="Brush_x_Multiplication.png"/></a>-->
									<?php// }  ?>
								<p><?php echo $row1['comment_text'];  ?>  <?php echo $row1['time']; ?></p>
							</fieldset>
							
						<?php 
						}
						
?>