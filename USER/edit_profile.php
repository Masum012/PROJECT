<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}
$user_id=$_SESSION['id'];
				$sql3="SELECT * FROM register WHERE user_id='$user_id'";
				$result3=mysql_query($sql3);
				while($row3=mysql_fetch_array($result3))
				{
					$username=$row3['username'];
					$date_of_birth=$row3['date_of_birth'];
					$date_of_birth=$row3['date_of_birth'];
					$email=$row3['email'];
					$telephone=$row3['telephone'];
					$school=$row3['school'];
					$college=$row3['college'];
					$university=$row3['university'];
					$gender=$row3['gender'];
					$pro_pic=$row3['pro_pic'];
					$cover_photo=$row3['cover_photo'];
				} 
?>
<html>
	<head>
	<title>Association of Rangpur</title>
	<link rel="shortcut icon" href="masrafee.png">
		<link rel="stylesheet" type="text/css" href="../ALL/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../ALL/button.css">
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
			
				
				<div class="cover_photo">
					<a href="img.php?link=<?php echo $cover_photo ;?>"> <img src="<?php echo $cover_photo ?>" style="width:90%;height:400px ;margin-top:50px;margin-left:50px;border-radius:5px;border-style: solid;border-color:white;border-width: 1px;"> </a>
					</a>
					<div class="pro_pic" style="margin-top:-250px;margin-left:20px;overflow:hidden;">
						 <a href="img.php?link=<?php echo $pro_pic ;?>"><img src="<?php echo $pro_pic; ?>" style="width:20%;height:200px;margin-top:50px;margin-left:50px;border-radius:5px;border-style: solid;border-color:white;border-width: 1px;">
							</a>
					</div>
					
					
				</div>
				
				<div class="menubar">
					<ul style="overflow:hodden;">
					<a href="timeline.php?user_id=<?php echo $user_id;?>"><li class="ot" style="margin-left:8px;">Timeline</li></a>
					<a href="about.php?user_id=<?php echo $user_id;?>"><li class="ot">About</li></a>
					</ul>
				</div>
				
				<div style="margin-left:50px;margin-right:50px;margin-top:100px;">
					<a href="change_password.php" class="button" value="change password" style="margin-top:-200px;">change password</a>
					<form action="edit_table.php" method="post" enctype="multipart/form-data">
							
							
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;width:855px;"><label>Change cover photo:</label>
								<button class="button" id="cover" value="choose file" ><input type="file" name="cover" id="fileToUpload"></button>	
							</fieldset>
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Change pro-pic:</label>
								<button class="button" id="pic" value="choose file" ><input type="file" name="pic" id="fileToUpload"></button>	
							</fieldset>
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>User Name:</label>
								<input name="username" type='text' style="margin-left:20px;height:50px;width:500px;border-radius:5px;"value="<?php echo $username; ?>"/>	
							</fieldset>
							
							
							
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>School:</label> <input type='text' name="school" style="margin-left:50px;height:50px;width:500px;border-radius:5px;"value="<?php echo $school;?>"/>
							
							</fieldset>
						
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>College:</label> <input type='text' name="college" style="margin-left:45px;height:50px;width:500px;border-radius:5px;"value="<?php echo $college; ?>"/>
							</br></br>
							
							</fieldset>
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>University:</label> <input type='text' name="university" style="margin-left:27px;height:50px;width:500px;border-radius:5px;"value="<?php echo $university;?>"/>
							</br></br>
							</fieldset>
							
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Gender:</label> 
							
							<?php
							if($gender=='male'){?>
							</br><input type="radio" name="sex" value="male" checked="checked"  >Male
							<br>
							<input type="radio" name="sex" value="female" >Female
							</br></br>
							<?php } else if($gender=="female"){ ?>
							</br><input type="radio" name="sex" value="male" >Male
							<br>
							<input type="radio" name="sex" value="female" checked="checked" >Female
							</br></br>
							<?php }else { ?>
							</br><input type="radio" name="sex" value="male" >Male
							<br>
							<input type="radio" name="sex" value="female" >Female
							</br></br>
							<?php } ?>
							</fieldset>
							
							 
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Phone:</label> <input type='text' name="telephone" style="margin-left:50px;height:50px;width:500px;border-radius:5px;" value="<?php echo $telephone; ?>"/>
							</br></br>
							
							</fieldset>
							
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Email:</label> <input type='email' name="email" style="margin-left:55px;height:50px;width:500px;border-radius:5px;" value="<?php echo $email; ?>"/>
							</br></br>
							
							</fieldset>
						
							<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>birthday:</label> <input type='date' name="date_of_birth" style="margin-left:32px;height:50px;width:500px;border-radius:5px;" value="<?php echo $date_of_birth; ?>"/>
							</br></br>
							</fieldset>
							<input type="submit" value="OK" class="button" style="margin-left:700px;margin-top:50px;margin-bottom:50px;">
					</form>
					
				</div> 
			</div>
			
			<div class="footer_class fix" style="margin-top:-5px;">
				<div class="footer fix">
					&copy Masum
				</div>
			</div>
		</div>
		
		<script src="bootstrap.jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		
	</body>
</html>

