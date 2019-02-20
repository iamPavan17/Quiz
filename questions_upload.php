<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$query = " SELECT * FROM `questions_upload` ";
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<!-- Bootstrap core CSS -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Material Design Bootstrap -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Questions Upload</title>
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<form method="POST" action="question_uploadphp.php" class="col s12">
			<div class="row">
				<div class="input-field">
					<i class="material-icons prefix">help_outline</i>
					<textarea id="q" type="text" class="materialize-textarea" rows="3" name="question" required=""></textarea>
					<label for="q">Question</label>
				</div>
				<br>
				<div class="input-field">
					<i class="material-icons prefix">priority_high</i>
					<textarea id="o1" type="text" class="materialize-textarea" rows="3" name="opt1" required=""></textarea>
					<label for="o1">Option1</label>
				</div>
				<br>
				<div class="input-field">
					<i class="material-icons prefix">priority_high</i>
					<textarea id="o2" type="text" class="materialize-textarea" rows="3" name="opt2" required=""></textarea>
					<label for="o2">Option2</label>
				</div>
				<br>
				<div class="input-field">
					<i class="material-icons prefix">priority_high</i>
					<textarea id="o3" type="text" class="materialize-textarea" rows="3" name="opt3" required=""></textarea>
					<label for="o3">Option3</label>
				</div>
				<br>
				<div class="input-field">
					<i class="material-icons prefix">priority_high</i>
					<textarea id="o4" type="text" class="materialize-textarea" rows="3" name="opt4" required=""></textarea>
					<label for="o4">Option4</label>
				</div>
				<br>
				<div class="input-field col s3">
					<i class="material-icons prefix">vpn_key</i>
					<input id="a" type="number" max="4" min="1" name="ans"></textarea>
					<label for="a">Answer</label>
				</div>
			</div>

			  <button class="btn waves-effect waves-light btn-large" type="submit" name="submit" style="background-color: #373737;">Submit
			    <i class="material-icons right">send</i>
			  </button><br><br><br>
		</form>
	<!-- </div> -->

	<table border="1">
		<thead class="grey lighten-2">
			<tr>
				<td>Question #</td>
				<td>Question</td>
				<td>Option1</td>
				<td>Option2</td>
				<td>Option3</td>
				<td>Option4</td>
				<td>Answer</td>
			</tr>
		</thead>

		<?php
			$result2 = mysqli_query($connect, $query);
			// echo $result;
			while($row2 = mysqli_fetch_array($result2)):;
		?>

		<tbody>
			<tr>
				<td><?php echo $row2[0]; ?></td>
				<td><?php echo $row2[1]; ?></td>
				<td><?php echo $row2[2]; ?></td>
				<td><?php echo $row2[3]; ?></td>
				<td><?php echo $row2[4]; ?></td>
				<td><?php echo $row2[5]; ?></td>
				<td><?php echo $row2[6]; ?></td>
			</tr>
		</tbody>

		<?php
			endwhile;
		?>
	</table><br>

		<form method="POST" action="question_modify.php">
		<select name="id" class="browser-default" style="width: 80px;">
			<?php
				$result1 = mysqli_query($connect, $query);
				while($row1 = mysqli_fetch_array($result1)):;
				?>
				<option value="<?php echo $row1[0]; ?>"> <?php echo $row1[0]; ?></option>
				<?php
				endwhile;
				?>
		</select>
		<br>
		<button class="btn waves-effect waves-light" type="submit" name="submit" style="background-color: #373737;">Modify
			<i class="material-icons right">mode_edit</i>
		</button>
		<button class="btn waves-effect waves-light" type="submit" name="delete" style="background-color: #373737;">Delete
			<i class="material-icons right">delete_forever</i>
		</button>
		<a class="btn waves-effect waves-light" type="submit" name="" id="done" style="background-color: #373737;">Done
			<i class="material-icons right">done</i>
		</a>	
	</form><br>
	
</div>

<div class="row">
	<div class="col s10"></div>
	<div class="col s2">
		<a href="change_password.php">Change Password</a>
	</div>
</div>

<script type="text/javascript">
	doneHandler = document.getElementById("done");

	doneHandler.addEventListener('click', function(){
		swal(`Are you sure you want to submit these questions!`, ``,{
                            buttons: {
                                cancel: "Cancell!",
                                catch: {
                                    text: "OK!!!",
                                    value: "catch"
                                }
                            },
                        })
                        .then((value) => {
                        switch (value){
                            case "catch": 
                            swal("Gotcha!","You will be automatically logged out!!!","success")
                            .then(function(){
                                window.location = "index.php";
                            });
                            break;
                            default:
      						swal("Gotcha!","Cancelled!!!","error")
                        }
                        });
	});
</script>
	
</body>
</html>