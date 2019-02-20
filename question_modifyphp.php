<?php
	// include 'question_modify.php'
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$question = $option1 = $option2 = $option3 = $option4 = $answer = $id = "";

	if(isset($_POST['modify']))
	{
		$question = $_POST['question'];
		$option1 = $_POST['opt1'];
		$option2 = $_POST['opt2'];
		$option3 = $_POST['opt3'];
		$option4 = $_POST['opt4'];
		$answer = $_POST['ans'];
		$id = $_POST['i'];

		// echo $id;
		// echo $question;
		$query2 = " UPDATE `questions_upload` SET `question`='$question',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`answer`='$answer' WHERE `q_id` = $id ";
		mysqli_query($connect, $query2);
		header('Location: questions_upload.php');
	}


?>