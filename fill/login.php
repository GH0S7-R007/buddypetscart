<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Buddy Login</h2>
	</div>
	
	<form method="post" action="login.html">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
				
			<button onclick="myFunction()" class="btn" name="login_user"> Login</button>
			<script>
			function myFunction() { alert("oops....!!! You are not a registered user.");
			}
			</script>
		<a href="index.html" button onclick="myFunction1()" class="btn" name="Guest_user"> Guest Login</button></a>
			<script>
			function myFunction1() { alert("welcome Guest user... Your ip address noted due to security purpose");
			}
			</script>
		</div>
		<p>
			Not yet a member? <a href="register.html">Sign up</a>&nbsp&nbsp&nbsp Forget Password? <a href="register.html">Reset</a> 
		</p>
	</form>


</body>
</html>
