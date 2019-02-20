<?php
	session_start();
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$std_id = $pass = $name = "";
	if(isset($_POST['submit']))
	{
		$std_id = $_POST['std_id'];
		$pass = $_POST['pass'];

		$id = 0;
		$query = " SELECT * FROM `users` WHERE `std_id` = '$std_id' AND `password` = '$pass'  ";
		$result = mysqli_query($connect, $query);
		while($row = mysqli_fetch_array($result)){
			$id= $row[0];
			$name = $row[1];
		}

		$_SESSION["name"] = $name;

		if($id !== 0)
		{
			header('Location: std_home.php');
		}

		else
		{
			echo "<script>";
			echo "alert('asjgd')";
			echo "</script>";
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quiz me</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-graduation-cap"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter id">
						<input class="input100" type="text" name="std_id" placeholder="Student ID">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-10">
						<a class="txt1" href="forgotpass.php">
							Forgot Password?
						</a>
					</div>

					<div class="text-center p-t-80">
						<a class="txt1">
							Don't have an account?
						</a>
						<a class="txt1" href="registration.php">
							click here to register?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>