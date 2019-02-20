<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		swal("Success!","Your password was changed!!!","success")
                            .then(function(){
                                window.location = "login.php";
                            });
	</script>
</body>
</html>