<html>
	<head>
		<title>Association of Rangpur</title>
		<link rel="shortcut icon" href="../USER/masrafee.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="all.css">
		<!--<link rel="stylesheet" type="text/css" href="button.css">-->
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
			</div>
			<div class="sidebar_class fix">
				<div  class="sidebar fix">
					<ul>
						<a href="home.php" class="img-rounded"><li class="ot">home</li></a>
						<a href="members.php"><li class="ot">members</li></a>
						<a href="association.php"><li class="ot">about association</li></a>
						<a href="kuet.php"><li class="ot">about kuet</li></a>
						<a href="alumny.php"><li class="ot">alumni</li></a>
						</ul>
				</div>
			</div>
			<div class="content_class fix">
				<div class="content">
				<h2></h2>
					<form action="register_table.php" method="post">
						<div align="center">
							<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h2>Sign Up</h2></legend>
								</br>
								<h3>
									<label for='username' >UserName*:</label>
									<input type='text' name='username' maxlength="50" style="margin-left:30px;height:40px"required/>
								</h3>
								 </br>
									</br>
			
								<h3>
									<label for='password' >Password *:</label>
									<input type='password' name='pass'  maxlength="50" style="margin-left:29px;height:40px"required/>
								</h3>
								    </br>
								
								<h3>
									<label for='date' style="">Date of Birth *: </label>
									<input type='date' name='date'  maxlength="50" style="margin-left:0px;height:40px;width:270px"required/>
								</h3>
								    </br>
								 
								<h3>
									<label for='email' >Email *: </label>
									<input type='email' name='mail' maxlength="50" style="margin-left:75px;height:40px"required/>
								</h3>
								    </br>
								 
								<h3>
									<label for='telephone' >Telephone: </label>
									<input type='text' name='phone'  maxlength="50" style="margin-left:45px;height:40px"required/>
								</h3>
								    </br>
								
								<input type="reset" value="reset" />
								<input type="submit" value="Submit"  />
							</fieldset>
						</div>
					</form>
					
					<?php
						
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