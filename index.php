<!DOCTYPE HTML>
<html>
<head>
	<title>Welcome</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
h1{
	color:RED;
	background-color:rgba(255,255,255,0.4);
}
</style>
</head>
<body background="background.jpg">
	<br>
	<div style='text-align:center'>
	<h1> WELCOME </h1>
	<h1> TO </h1>
	<h1> ABSENCE TRACKER</h1><br><br><b><br>
	</div>
	
	
	<form name='userLoginForm' method='post' action='userLogIn.php'> 
		<div class="container"  style='width:30%;height:60%;text-align:center;border-style:solid;background-color:white' >
		<h3  style='text-align:center'>Log in</h3><br>
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required><br><br>

		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
		<button type="submit">Login</button><br><br>
		</div>
	</form><br>

</body>
</html>