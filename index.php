<!DOCTYPE HTML>
<html>
}
<head>
	<title>Welcome</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<style>
form {
    border-style: solid;
	}
</style>
</head>
<body>
	<br>
	<div style='text-align:center'>
	<h1> WELCOME </h1>
	<h1> TO </h1>
	<h1> ABSENCE TRACKER</h1><br><br><b><br>
	</div>
	
	<div  id='loginDiv' style='text-align:center'>
	<h3>Log in</h3>
	<form name='ownerLoginForm' method='post' action='ownerLogIn.php'>
		E-mail: <input type='text' name='ownerUser'></input>
		<br><br>
		Password: <input type='password' name='ownerPass'></input>
		<br><br>
		<input type='submit' class='btn-success btn' value='Log in'></input>
	</form><br>
	</div>
</body>
</html>