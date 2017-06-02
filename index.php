<?php
	session_start();
	include("dbConnection.php");
   
	if(isset($_POST["username"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
	}
	else if($_SESSION["username"] != null){
		$username = $_SESSION["username"];
		$password = $_SESSION["password"];
	}

	$sql = "SELECT * FROM user WHERE email='".$username. "'and password = '".$password . "'" ;
	$result = $conn->query($sql);
	$count = mysqli_num_rows($result);
	if ($count==1) {
		 $_SESSION["password"] = $password;
		 $_SESSION["username"] = $username;
         header("location: loginForm.php");
	}	
	else{
		$error = "Your email or Password is invalid";
	}
?>
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
 <link rel="stylesheet" href="index.css">
<style>

</style>
</head>
<body>
	<br>
	<div style='text-align:center'>
	<h1> WELCOME </h1>
	<h1> TO </h1>
	<h1> ABSENCE TRACKER</h1><br><br><b><br>
	</div>
	<form  method='post' action=''> 
		<div class="container">
			<h3  style='text-align:center'>Log in</h3><br>
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required><br><br>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required><br><br>
        	<a><i>Forgot Password?</i></a><br><br>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		</div><br><br>
		<div style="text-align: center;">
			<button type="submit">SUBMIT</button>
			
  		</div>
	</form><br>

</body>
</html>