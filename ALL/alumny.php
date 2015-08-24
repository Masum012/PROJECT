
<?php session_start();
include "../ALL/db.php";
?>

<html>

	<head>
	<title>Association of Rangpur</title>
	<link rel="shortcut icon" href="../USER/masrafee.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="all.css">
		<link rel="stylesheet" type="text/css" href="button.css">

	</head>
	
	<body class="lead">
		<div class="main fix">
			<div class="header_class fix" style="height:140px;">
				<div class="header fix">
					<h1><h1>
				</div>
				<div class="btn">
				<a href='register.php' class='btn btn-default'>Register</a>
				<a href='login.php' class='btn btn-default'>login</a>
				</div>
				<!--<div class="btn">
					<button type="button" class="register"><a href="">register</a></button>
					<button type="button"><a href="login.php">login</a></button>
				</div>-->
			</div>
			<div class="sidebar_class fix">
				<div class="sidebar fix">
					<ul>
						<a href="home.php"><li class="ot">home</li></a>
						<a href="members.php"><li class="ot">members</li></a>
						<a href="association.php"><li class="ot">association</li></a>
						<a href="kuet.php"><li class="ot">about kuet</li></a>
						<a href="alumny.php"><li class="selected">alumni</li></a>
					</ul>
				</div>
			</div>
			<div class="content_class fix">
				<div class="content" style="margin-top:10px;">
				<?php	
					$sql="SELECT * FROM register";
					$result=mysql_query($sql);
					
					while($row=mysql_fetch_array($result))
					{
						$user=$row['username'];
						$pic=$row['pro_pic'];
						if($row['alumny']==1){
						?>
						<fieldset style="margin:auto;width:500px;background-color:white;border-bottom:1px solid;border-radius:5px;">
											<div><img src="<?php echo $pic; ?>" style="float:left; height:100px; width:100px;"></img></div>
										<div>	<a style="text-decoration:none;font-family:Lucida Calligraphy"> <?php echo $user; ?> </a></div>
						</fieldset>
						<?php
						}
					}
					
				?>
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