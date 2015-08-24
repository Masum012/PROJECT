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
			<div class="header_class fix" style="overflow:hidden;">
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
			 
			<div class="content_class" style="margin-left:40px;margin-top:0px;overflow:hidden;">
			<?php	
		 	$sql2="SELECT * FROM register";
			$result2=mysql_query($sql2);
			while($row2=mysql_fetch_array($result2))
										{
										
											$username=$row2['username'];
											$user_id=$row2['user_id'];
											$pic=$row2['pro_pic'];
											?>
											<fieldset style="margin:auto;width:500px;background-color:white;border-bottom:1px solid;border-radius:5px;">
											<img src="<?php echo $pic; ?>" style="height:100px; width:100px;"></img>
											<a href="timeline.php?user_id=<?php echo $user_id;?>" style="text-decoration:none;font-family:Lucida Calligraphy"> <?php echo $username; ?> </a>
											<?php
											if(isset($_SESSION['admin'])||($user_id==$_SESSION['id'])){ ?>
											<?php if(isset($_SESSION['admin']))
											{
														if($row2['admin']==0){
													?>
													
													<form action="admin.php" method='post'>
														<input type="hidden" name="user_id" value="<?php echo $user_id;?>"></input>
														<input class="button" type="submit" value="make admin"></input>
													</form>
													
													<?php }
													else { ?>
													<form action="unadmin.php" method='post'>
														<input type="hidden" name="user_id" value="<?php echo $user_id;?>"></input>
														<input class="button" type="submit" value="unmake admin"></input>
													</form>
													<?php }
											
													if($row2['alumny']==0)
													{ ?>
														<form action="alumny.php" method='post'>
															<input type="hidden" name="alumny_id" value="<?php echo $user_id;?>"></input>
															<input class="button" type="submit" value="make alumny"></input>
														</form>
													<?php }
											
											
											} ?>
											
											
											<form action="member_delete.php" method='post'>
												<input type="hidden" name="user_id" value="<?php echo $user_id;?>"></input>
												<input class="button" type="submit" value="delete"></input>
											</form>
											<?php } ?>
											
											
											
											</fieldset>
											<?php
										}
			?> 
			</div>
			<div class="footer_class fix"style="border-radius:5px;">
				<div class="footer fix " >
					&copy Masum
				</div>
			</div>
		</div>
	</body>
</html>