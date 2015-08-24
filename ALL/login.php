<?php
session_start();
	if(isset($_COOKIE['association'])){
	  $_SESSION['id']=$_COOKIE["association"] ;
	  header("Location: ../USER/afterlogin_user.php");
}
?>

<html>

	<head>
		<title>Association of Rangpur</title>
		<link rel="shortcut icon" href="../USER/masrafee.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="all.css">
		<link rel="stylesheet" type="text/css" href="button.css">
		<link rel="stylesheet" type="text/css" href="../USER/form.css">
		<script>
								function login_()
								{
									var username = document.getElementById("username").value;
									var password = document.getElementById("password").value;
									
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("error").innerHTML =  xmlhttp.responseText;
										}
									}
									xmlhttp.open("GET", "login_table.php?username="+ username +"&password=" + password, true);
									xmlhttp.send();
								}
		</script>
	</head>
	
	<body class="lead">
		<div class="main fix">
			<div class="header_class fix"style="height:140px;">
				<div class="header fix">
					<h1><h1>
				</div>
				<div class="btn">
				<a href='register.php' class='btn btn-default'>Register</a>
				<a href='login.php' class='btn btn-default'>login</a>
				</div>
			</div>
			<div class="sidebar_class fix">
				<div class="sidebar fix">
					<ul>
						<a href="home.php"><li  class="ot">home</li></a>
						<a href="members.php"><li  class="ot">members</li></a>
						<a href="association.php"><li class="ot">about association</li></a>
						<a href="kuet.php"><li class="ot">about kuet</li></a>
						<a href="alumny.php"><li class="ot">alumni</li></a>
					</ul>
				</div>
			</div>
			<div class="content_class fix">
				<div class="content">
					<form id='login' action='login_table.php' method='post' >
						
						<fieldset style="width:500px;margin:100 auto;border-radius:5px;color:black;;">
						
						<legend><h2>Login</h2></legend>
						
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						 </br>
						<h3>
							<label for='username' style='color:black;' >UserName*:</label>
							<input type='text' name='username' id='username'  maxlength="50" style="height:40px"required/>
						</h3>
						 </br>
						 </br>
						<h3>
							<label for='password' style='color:black;' >Password*:</label>
							<input type='password' name='password' id='password' maxlength="50" style="height:40px"required/>
						</h3>
						<p id="error"><?php if(isset($_SESSION['error']))
						echo $_SESSION['error'];?>
							</p>
							<input type="checkbox" name="checkbox" value="checked"/>Remember Me
						 </br>
						 </br>
						 <input type="reset" value="reset" />
						<input type='submit'  name='Submit' value='Submit' />
						 
						</fieldset>
					</form>
				</div>
					
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