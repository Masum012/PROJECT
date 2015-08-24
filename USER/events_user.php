<?php session_start();
include "../ALL/db.php";
$events="";

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
		<link rel="stylesheet" type="text/css" href="user.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
	</head>
	<body>
		<div class=" fix">
			<div class="header_class fix" style="border-radius:5px;">
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
			<div class="content_class"  style="border-radius:5px;margin-left:40px;margin-top:5px;">
			<?php
				if($_GET["click"]!="1"){
			?>
			
				<form action="events_user.php?click=1" method="post" style="margin-left:200px;margin-top:-10px">
					<input type="submit" style="margin-top:30px" class="button" value="Create Event"/>
				</form>
			<?php
			}
				else{
			?>	
			 <fieldset style="margin:auto;width:500px;margin-top:-10px;background-color:white;border:1px; solid">
				<form action="events_table.php" method="post" enctype="multipart/form-data" style="margin-left:21px; color:black;">
					<h3 >Create event:</h6></br>
					<label >Name:    </label>
					<input type="text" name="event"style="border-radius:5px; margin-left:40px ; height:40px;width:300px;"required></input> <br/><br/>
					<label >Details:</label><textarea name="details"style="border-radius:5px; margin-left:38px;width:300px;"required></textarea><br/><br/>
					<label >Date:</label><input type="date"name="date" style="border-radius:5px; margin-left:50px;width:150px;"required></input><label style="color:E0D0BD; margin-left:10px;">Time:</label><input type="time" name="time"style="border-radius:5px;"required/><br/><br/>
					<label >Where:</label><textarea name="place"style="border-radius:5px;margin-left:40px;width:300px;"required></textarea><br/><br/>
					<label >Set an image:</label><input type="file"class="button" name="fileToUpload" id="fileToUpload" style="margin-left:40px;width:250px;"required></br><br/>
					<input type="submit" class="button" value="Create"/>
				</form>
			
			</fieldset>
			<?php } ?>
				</br>
				</br>
				<?php
					$sql="SELECT * FROM event_table ORDER BY event_id DESC";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result))
					{
						$going=0;
						$id=$_SESSION['id'];
						$user_id=$row['user_id'];
						$event_id=$row['event_id'];
						$event_title=$row['event_title'];
						$details=$row['details'];
						$place=$row['place'];
						$date=  $row['date'];
						$time=$row['time'];
						$link=$row['link'];
						/* $sql="SELECT username FROM register WHERE user_id='$user_id'";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result))
						{
							$username=$row['username'];
						}  */
						
						 $sql1="SELECT * FROM event_effect WHERE event_id='$event_id' AND going='$id'";
						$result1=mysql_query($sql1);
						while($row1=mysql_fetch_array($result1))
						{
							$events=$row['event_id'];
						}  
						
						
						
						 $rows=mysql_query("SELECT COUNT(event_id) FROM event_effect WHERE event_id='$event_id'");
						$going = mysql_fetch_array($rows);
						/* $result1=mysql_query($sql1);
						while($row1=mysql_fetch_array($result1))
						{
							$going=$going+1;
						} */
				?>
				
		
				<div class="post" style="margin-left:80px;">
					<fieldset style="width:700px; border-radius:5px;background-color:white;border-bottom:1px solid;">
						
						<script>
								function join<?php echo $event_id; ?>()
								{

									var event = document.getElementById("event<?php echo $event_id; ?>").value;
																	
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("join<?php echo $event_id; ?>").innerHTML =  xmlhttp.responseText;
											alert(event);
										}
									}
									xmlhttp.open("GET", "join.php?event="+ event , true);
									xmlhttp.send();
								}

						</script>
						<div class="image" style="float:left;" ><!--background-image:url("/");style="background-image: url(../ALL/background.jpg)"-->
							<a href="img.php?link=<?php echo$link;?>"> <img src="<?php echo$link;?>" style="width:200px;height:150px ;margin-top:30px;margin-bottom:30px"> </a>		
						</div>
						
						<div style="float:left;margin-left:20px;"  >
							<h2 style="color:blue;"><?php echo $event_title?></h2>
							<p>at <?php echo $place?></p>
							<p>in <?php echo $date?> at <?php echo $time?></p>
							
							<div id="join<?php echo $event_id; ?>">
							<input type="hidden" id="event<?php echo $event_id; ?>" value="<?php echo $event_id; ?>">
				
								<?php if($events != $event_id){ ?>
								<a href='' class='button'>May be</a>
								<a class="button" onclick="join<?php echo $event_id; ?>()">Join</a>
								<?php
								if($going[0]<2)
								echo $going[0] ." is going";
								else
								echo $going[0] ." are going";
								 } else{ ?>
								<a class='button'>Going</a>
								<?php
									if($going[0]<2)
								echo $going[0] ." is going";
								else
								echo $going[0] ." are going"; } ?>
								
							<?php	if($user_id==$_SESSION['id']||isset($_SESSION['admin'])){ ?>
								<a href="delete_event.php?event_id=<?php echo $event_id;?>" class='button'>delete event</a>
							<?php }
							?>
							</div>
							
						</div>
						
					</fieldset>
				</div>
				<?php
					}
				?>
			</div>
			
			<div class="footer_class fix">
				<div class="footer fix">
					&copy Masum
				</div>
			</div>
		</div>
	</body>
	
</html>