<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$question = $option1 = $option2 = $option3 = $option4 = $answer = "";

	if(isset($_POST['submit']))
	{
		$question = $_POST['question'];
		$option1 = $_POST['opt1'];
		$option2 = $_POST['opt2'];
		$option3 = $_POST['opt3'];
		$option4 = $_POST['opt4'];
		$answer = $_POST['ans'];

		$count1 = 0;
		$query1 = " SELECT MAX(q_id) FROM `questions_upload` ";
		$result1 = mysqli_query($connect, $query1);
		while ($row1 = mysqli_fetch_array($result1)) {
			$count1 = $row1[0];
		}

		$count1++;
		$query2 = " INSERT INTO `questions_upload`(`q_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ($count1,'$question','$option1','$option2','$option3','$option4','$answer') ";
		mysqli_query($connect, $query2);
		header('Location: questions_upload.php');
	}

	// echo $question;

?>