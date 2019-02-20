<?php
	session_start();
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	if(!empty($_SESSION['name'])){

    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 

   $keys=array_keys($_POST);
   $order=join(",",$keys);

   $response=mysqli_query($connect,"select q_id,answer from questions_upload where q_id IN($order) ORDER BY FIELD(q_id,$order)")   or die(mysqli_error());

   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['q_id']]){
               $right_answer++;
           }else if($_POST[$result['q_id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }

   $sname = $_SESSION["name"];
   $query1 = "SELECT * FROM `users_info` WHERE `std_name` = '$sname'";
   $std_attempts = 0;
	$result = mysqli_query($connect, $query1);
	while($row = mysqli_fetch_array($result)){
		$std_attempts = $row[2];
	}
	
	$std_attempts++;

	$query2 = " UPDATE `users_info` SET `std_attempts`=$std_attempts,`std_score`=$right_answer WHERE `std_name` = '$sname' ";
	mysqli_query($connect, $query2);
?>

<!DOCTYPE html>
<html>
<head>
	<style>
            #footer {
               position: fixed;
               left: 0;
               bottom: 0;
               width: 100%;
               background-color: #ababab;
            }
    </style>
	<title>Quiz me</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <nav style="background-color: #ababab;">
    <div class="nav-wrapper">
        <div class="row">
            <div class="col s2">
              <a class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quizme.</a></div>
            <ul class="right hide-on-med-and-down">
                <li><a><i class="material-icons right">account_circle</i><?php echo $_SESSION["name"]; ?></a></li>
                <li><a href="logout.php"><i class="material-icons right">exit_to_app</i>Logout</a></li>
            </ul>
        </div>
    </div>
  </nav>
<br><br><br><br><br><br><br>
  <div class="container text center">
	<h4>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></h4>
    <h4>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></h4>
    <h4>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></h4>
</div>

    <footer class="page-footer" id="footer">
          <div class="footer-copyright">
            <div class="container right">
            © 2018 Copyright Reserved | DSY
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
          </div>
        </footer>
</body>
</html>

<?php 
}?>