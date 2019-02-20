<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$id = "";
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		// echo $id;
	}
	if (isset($_POST['delete'])) {
		$id = $_POST['id'];

		$dquery = " DELETE FROM `questions_upload` WHERE `q_id` = $id ";
		mysqli_query($connect, $dquery);
		header('Location: questions_upload.php');
	}

	// echo $id;
	$query = " SELECT * FROM `questions_upload` WHERE `q_id` = $id ";
	// echo $query;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Question Modify</title>
</head>
<body>
	<div class="container">
		<h3>Old Question</h3>
	<table border="1">
		<thead>
			<tr>
				<!-- <td>Question ID</td> -->
				<td>Question</td>
				<td>Option1</td>
				<td>Option2</td>
				<td>Option3</td>
				<td>Option4</td>
				<td>Answer</td>
			</tr>
		</thead>
		<?php
			$result1 = mysqli_query($connect, $query);
			// echo $result;
			while($row1 = mysqli_fetch_array($result1)):;
		?>
		<tbody>
			<tr>
				<td><?php echo $row1[1]; ?></td>
				<td><?php echo $row1[2]; ?></td>
				<td><?php echo $row1[3]; ?></td>
				<td><?php echo $row1[4]; ?></td>
				<td><?php echo $row1[5]; ?></td>
				<td><?php echo $row1[6]; ?></td>
			</tr>
		</tbody>

		<?php
			endwhile;
		?>

	</table>

	<br><br>
	<h2>Fill in the below to overwrite the above question</h2><br>
	<form method="POST" action="question_modifyphp.php">
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
		<button class="btn waves-effect waves-light btn-large" type="submit" name="modify">Submit
			<i class="material-icons right">send</i>
		</button><br><br><br>
		<input style="display:none" type="text" name="i" value =<?php echo $id ?> >
		<br><br><br>
	</form>
</div>
</body>
</html>