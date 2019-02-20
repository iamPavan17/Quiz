<?php
	session_start();
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "quiz";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

	if(!empty($_SESSION['name'])){
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Quiz me</title>

<style>
            #footer {
               position: fixed;
               left: 0;
               bottom: 0;
               width: 100%;
               background-color: #ababab;
            }
    </style>
</head>
<body>
  <nav style="background-color: #ababab;">
    <div class="nav-wrapper">
        <div class="row">
            <div class="col s2">
              <a class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quizme.</a></div>
            <ul class="right hide-on-med-and-down">
                <li><a class="btn-floating pulse" onclick="M.toast({html: 'ahskjdahk akjsdhkajhs asduwdkakj akjsdwugd<br> ajssgdjg'})"><i class="material-icons">help_outline</i></a></li>
                <li><a><i class="material-icons right">account_circle</i><?php echo $_SESSION["name"]; ?></a></li>
            </ul>
        </div>
    </div>
  </nav>
<br><br>
	<div class="container">
		<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
					<?php 
					$res = mysqli_query($connect,"select * from questions_upload  ORDER BY RAND()") or die(mysql_error());
                    $rows = mysqli_num_rows($res);
					$i=1;
                while($result=mysqli_fetch_array($res)){?>

                    <?php if($i==1){?>         
                    <div id='questions<?php echo $i;?>' class='cont'>
                        <h5 class='questions_upload' id="qname<?php echo $i;?>"> <?php echo $i?>. <?php echo $result['question'];?></h5>
                        <label>
                            <input type="radio" value="1" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option1'];?></span>
                        </label>
                       <br/>
                       <label>
                            <input type="radio" value="2" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option2'];?></span>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" value="3" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option3'];?></span>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" value="4" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option4'];?></span>
                        </label>
                        <br/>
                        <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/>                                                                      
                        <br/>
                        <!-- <button id='next<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button> -->
                    </div>     

                     <?php }elseif($i<1 || $i<$rows){?>

                    <div id='questions<?php echo $i;?>' class='cont'>
                            <h5 class='questions_upload' id="qname<?php echo $i;?>"><?php echo $i?>. <?php echo $result['question'];?></h5>
                        <label>
                            <input type="radio" value="1" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option1'];?></span>
                        </label>
                            <br/>
                        <label>
                            <input type="radio" value="2" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option2'];?></span>
                        </label>
                            <br/>
                        <label>
                            <input type="radio" value="3" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option3'];?></span>
                        </label>
                            <br/>
                        <label>
                            <input type="radio" value="4" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option4'];?></span>
                        </label>
                            <br/>
                        <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/>                                                                      
                            <br/>
                            <!-- <button id='pre<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                     -->
                            <!-- <button id='next<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button> -->
                    </div>

                   <?php }elseif($i==$rows){?>
                    <div id='questions<?php echo $i;?>' class='cont'>
                        <h5 class='questions_upload' id="qname<?php echo $i;?>"><?php echo $i?>. <?php echo $result['question'];?></h5>
                        <label>
                            <input type="radio" value="1" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option1'];?></span>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" value="2" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option2'];?></span>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" value="3" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option3'];?></span>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" value="4" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/><span><?php echo $result['option4'];?></span>
                        </label>
                        <br/>
                        <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['q_id'];?>' name='<?php echo $result['q_id'];?>'/>                                                                      
                        <br/>

                        <!-- <button id='pre<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                     -->
                        <button id='next<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish
                        <i class="material-icons right">send</i></button>
                    </div>
					<?php } $i++;} ?>

				</form><br><br><br><br><br><br>
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

<?php }
?>