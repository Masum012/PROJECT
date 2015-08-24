<?php session_start();
include "../ALL/db.php";
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}

$user_id=$_GET['user_id'];
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
					$pro_pic=$row3['pro_pic'];
					$cover_photo=$row3['cover_photo'];
					$gender=$row3['gender'];
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
				<div class="header fix" style="height:45px;width:960px;">
				</div>
				<div class="btn" style="width:500px;margin-top:-40px;margin-left:-40px">
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
				
				<div style="margin-left:50px;margin-right:50px;">
				
					<?php
						if($_SESSION['id']==$user_id)
						{
					?>
					<a class="button" href='edit_profile.php'>edit profile</a>
					<?php } ?>
					<fieldset style="height:75px;border-radius:5px;background-color:white;width:855px;"><label>School:</label> <?php echo $school;?></br></br>
					
					</fieldset>
				
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>College:</label> <?php echo $college;?>
					</br></br>
					
					</fieldset>
					
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>University:</label> <?php echo $university;?>
					</br></br>
					
					</fieldset>
					
					
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Gender:</label> <?php echo $gender;?>
					</br></br>
					
					</fieldset>
					
					
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Phone:</label> <?php echo $telephone;?>
					</br></br>
					
					</fieldset>
					
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>Email:</label> <?php echo $email;?>
					</br></br>
					
					</fieldset>
				
					<fieldset style="height:75px;border-radius:5px;background-color:white;"><label>birthday:</label> <?php echo $date_of_birth;?>
					</br></br>
					</fieldset>
					
				</div> 
			</div>
			
			<div class="footer_class fix">
				<div class="footer fix">
					&copy Masum
				</div>
			</div>
		</div>
	</body>
</html>
<!--masum--!>
