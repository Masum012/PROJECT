<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
?>
<html>
	<head>
	<title>Association of Rangpur</title>
	<link rel="shortcut icon" href="masrafee.png">
		<link rel="stylesheet" type="text/css" href="../ALL/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../ALL/button.css">
		<link rel="stylesheet" type="text/css" href="../ALL/home.css">
		<link rel="stylesheet" type="text/css" href="user.css">
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="main fix">
			<div class="header_class fix">
				<div class="header fix">
				</div>
				<div class="btn" style="width:500px;margin-top:-8px;margin-left:-40px;margin-bottom:20px;">
				<a href='timeline.php?user_id=<?php echo $_SESSION['id']; ?>'style="width:100px;" class='btn btn-default'>Timeline</a>
				<a href='members.php' style="width:100px;"  class='btn btn-default'>Members</a>
				<a href='afterlogin_user.php' style="width:100px;"  class='btn btn-default' >Newsfeed</a>
				<a href='logout.php' style="width:100px;"  class='btn btn-default'>log out</a>
				<a href='events_user.php?click=0' style="width:100px;"  class='btn btn-default'>events</a>
				
				</div>
			</div>
			<div class="content_class" style="margin-left:40px;margin-top:-25px;">
				<form action="afterlogin1_user.php" method="post" enctype="multipart/form-data" style="margin-left:80px;">
					<h3 style="color:black;">Update Status:</h6></br>
					<textarea name="header"style="border-radius:5px;" placeholder="Heading...." ></textarea>
					<button class="button" id="cover" value="choose file" ><input type="file" name="fileToUpload" id="fileToUpload"></button></br>
					<textarea name="status"style="height:100px;width:400px;border-radius:5px;" placeholder="Status...."></textarea>
					<input type="submit" class="button" value="update status"/>
				</form>
				</br>
				<?php
					$sql="SELECT * FROM post ORDER BY post_id DESC";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result))
					{
						$user_id=$row['user_id'];
						$post_header=$row['post_header'];
						$post_text=$row['post_text'];
						$time=$row['time'];
						$post_id=$row['post_id'];
						$link=$row['link'];
						$file_type=$row['file_type'];
						$sql3="SELECT * FROM register  WHERE user_id='$user_id' ";
						$result3=mysql_query($sql3);
						while($row3=mysql_fetch_array($result3))
						{
							$username=$row3['username'];
							$pic=$row3['pro_pic'];
						} 
				?>
				
				<div class="post" style="margin-left:80px;">
					<fieldset style="width:700px; border-radius:5px;background-color:white;border-bottom:1px solid;">
						<div><img src="<?php echo $pic; ?>" style="float:left; height:50px; width:50px;border-radius:5px;"></img></div>
						<div><a href="timeline.php?user_id=<?php echo $user_id;?>" style="text-decoration:none;" > <h2 style="color:blue;"><?php echo $username?></h2></a></div>
						<h4><?php echo $post_header?></h4>
						<div style="width:500px;">
						<p style="width:500px;"><?php echo $post_text?></p>
						</div>
						<?php 
							if($link)
							{
								if($file_type){
						?>
						
						<div class="image" ><!--background-image:url("/");style="background-image: url(../ALL/background.jpg)"-->
							<a href="img.php?link=<?php echo$link;?>"> <img src="<?php echo$link;?>" style="width:300px;"> </a>
						</div>
						<?php } ?>
						
						
						
						
						
						<a></a>
						
						
						<form action="download.php" target="_blank" method="post">
							<input type="hidden" name="download" value="<?php echo $link?>" />
							<input type="submit" name="submit" class="button" value="Download File" />
						</form>
						
						
						<?php
							}
							
							$post=0;
							$id=$_SESSION['id'];
						$sql4="SELECT * FROM post_like WHERE post_id='$post_id' AND liked_by='$id'";
						$result4=mysql_query($sql4);
						while($row4=mysql_fetch_array($result4))
						{
							$post=$post_id;
						}  	
						$likes=0;
						$rows=mysql_query("SELECT COUNT(post_id) FROM post_like WHERE post_id='$post_id'");
						$likes = mysql_fetch_array($rows); 
						if(isset($_SESSION['admin'])||($user_id==$_SESSION['id'])){
						?>
						<form action="delete_post.php" method="post">
							<input type="hidden" name="post_id" value="<?php echo $post_id;?>"/>
							<input type="submit" class="button" value="delete post"></input>
						</form>

						<?php } ?>
						<script>
								function like<?php echo $post_id; ?>()
								{
									var like = <?php echo $post_id; ?>;
																	
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("<?php echo $post_id; ?>").innerHTML =  xmlhttp.responseText;
											//alert(event);
										}
									}
									xmlhttp.open("GET", "post_like.php?like="+ like , true);
									xmlhttp.send();
								}

						</script>
						<?php if($post != $post_id){ ?>
								
								
								<p id="<?php echo $post_id; ?>">
								<a class="button" id="like<?php echo $post_id; ?>" onclick="like<?php echo $post_id; ?>()"><img src="like.jpg"></img> like</a>
								<?php echo $likes[0] ." like this";
								
								 } else{ ?>
								<a class='button'>liked</a>
								<?php
								echo $likes[0] ." like this";
								} ?>
						</p>
						
						<p><?php echo $time;?></p>
						<br/>
						<br/>
						<fieldset class="comment";style="width:600px; border-radius:5px;">
						
							<div id="all_comments<?php echo $post_id; ?>">
								<?php
									$sql1="SELECT * FROM comment_id WHERE post_id='$post_id'";
									$result1=mysql_query($sql1);
									while($row1=mysql_fetch_array($result1))
									{
										$i=1;
										$user_id1=$row1['user_id'];
										 $sql2="SELECT * FROM register WHERE user_id='$user_id1'";
										$result2=mysql_query($sql2);
										while($row2=mysql_fetch_array($result2))
										{
											$username=$row2['username'];
										} 
										$comment_text=$row1['comment_text'];
										$time=$row1['time'];						
								?>
								<fieldset class="previous_comment" id='previous_comment'style="width:625px; border-radius:5px;">
									<b style="color:blue;"><?php echo$username?> </b>
									<p><?php echo  $comment_text."   ".$time;?></p>
								</fieldset>
								
								<?php
									}
								?>
							</div>
							
							<script>
						
							
							//document.getElementById("footer").innerHTML = ;////
								/* var myVar=setInterval(function(){function comment<?php echo $post_id; ?>()},1000);
								function comment<?php echo $post_id; ?>()
								{
								document.getElementById("comment<?php echo $post_id;?>").value="sadfa";
									/* var post=<?php echo $post_id; ?>;
									
									
								}   */ 
							</script>	
							
							<form action="comment.php" method="get"><!-- ekhane suru korte hobe-->
								<input id="post_id" name="post_id" type="hidden" value="<?php echo $row['post_id']; ?>" />
								<textarea id="comment<?php echo $post_id;?>" name="comment"style="border-radius:5px;" placeholder="Post Your Comment Here...."></textarea>
								<input type='button' id='<?php echo $post_id; ?>'class="button" value="comment" onclick="comment_function<?php echo $post_id; ?>()"/>
							</form>

							

							<script>	
								
								var myVar=setInterval(function(){myTimer<?php echo $post_id;?>()},1000);

								function myTimer<?php echo $post_id;?>() {
									var post=<?php echo $post_id;?>;
									//var d = new Date();
									var xmlhttp = new XMLHttpRequest();
										xmlhttp.onreadystatechange = function() {
											if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
												document.getElementById("all_comments<?php echo $post_id;?>").innerHTML = xmlhttp.responseText;
											}
										}
										xmlhttp.open("GET", "comment_dynamic.php?post_id="+post, true);
										xmlhttp.send();
									
								}
								
								
								function comment_function<?php echo $post_id; ?>()
								{
									var post_id =<?php echo $post_id; ?>;// document.getElementById("post_id").value;
									
									var comment = document.getElementById("comment<?php echo $post_id;?>").value;
									document.getElementById("comment<?php echo $post_id;?>").value="";
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("all_comments<?php echo $post_id;?>").innerHTML = document.getElementById("all_comments<?php echo $post_id;?>").innerHTML + xmlhttp.responseText;
											
										}
									}
									xmlhttp.open("GET", "comment.php?post_id="+ post_id +"&comment=" + comment, true);
									xmlhttp.send();
								}
							</script>
						</fieldset>
					</fieldset>
				</div>
				<?php
					}
				?>
			</div>
			
			<div class="footer_class fix" >
				<div class="footer fix" id="footer">
					&copy Masum
				</div>
			</div>
		</div>
	</body>
</html>