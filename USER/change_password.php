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
		<link rel="stylesheet" type="text/css" href="../ALL/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../ALL/button.css">
		<link rel="stylesheet" type="text/css" href="../ALL/home.css">
		<link rel="stylesheet" type="text/css" href="user.css">
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<title>Association of Rangpur</title>
	<link rel="shortcut icon" href="../USER/masrafee.png">
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
			<div class="content_class" style="margin-left:40px;margin-top:-100px;height:700px;">
					 
						<fieldset style="width:500px;margin:100 auto;border-radius:5px;color:black;;">
					
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							 </br>
							<h5>
								<label for='username' style='color:black;' >previous password:</label>
								<input type='password' name='' id='o_p'  maxlength="50" style="height:40px;margin-left:100px;borber-radius:5px;"required/>
							</h5>
							 </br>
							 </br>
							<h5>
								<label for='password' style='color:black;' >enter new password:</label>
								<input type='password' name='password' id='n_p' maxlength="50" style="height:40px;margin-left:90px;borber-radius:5px;"required/>
							</h5>
							
							</br>
							 </br>
							<h5>
								<label for='password' style='color:black;' >re-enter new password:</label>
								<input type='password' name='password' id='r_n_p' maxlength="50" style="height:40px;margin-left:70px;borber-radius:5px;"required/>
							</h5> 
							<p id="error" style="margin-left:200px;"></p>
							<input type='submit' class='btn btn-default'  name='Submit' value='Submit' onclick="change()"/>
						 </br>
						 </br>
						
						 </br>

						</fieldset>
						
						<script>
								function change()
								{
									
									var o_p=document.getElementById("o_p").value;	
									var n_p=document.getElementById("n_p").value;							
									var r_n_p=document.getElementById("r_n_p").value; 
									 var n = n_p.localeCompare(r_n_p);
									
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("error").innerHTML =  xmlhttp.responseText;
											alert(event);
										}
									}
									xmlhttp.open("GET", "password.php?n_p="+ n_p + "&o_p=" + o_p + "&r_n_p=" + r_n_p , true);
									xmlhttp.send();
								
								}

					</script>
			</div>
			
			<div class="footer_class fix" style="margin-top: -100px;">
				<div class="footer fix" id="footer">
					&copy Masum
				</div>
			</div>
		</div>
	</body>
</html>