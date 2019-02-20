<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz me</title>
	<script type="text/javascript">
		setTimeout(function(){
			window.location = "index.php";
		}, 2000);
	</script>
</head>
<body>
	Successfully Logged out!!!
	<br><br>
	Redirecting to HomePage...
</body>
</html>