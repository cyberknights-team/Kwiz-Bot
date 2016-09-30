<!DOCTYPE html>
<html class="uk-notouch" dir="ltr" lang="en-gb"><head>
<head>
    <title>KwizBot</title>
	<link rel="stylesheet" href="../bower_components/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/jquery.js"></script>
    <script src="../js/uikit.min.js"></script>
	<script src="../bower_components/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="783793860345-stqlaq01bi4jbb0isdetd68vdbsdvqqv.apps.googleusercontent.com">	
	</head>

<body>	
<?php
	if(isset($_GET['id'])==y) {
      echo "<script>sweetAlert('Message Send !!!','Thanks for your response... We will contact you soon... ');</script>";
    }
	?>		
                    <div style="Background:grey; height: 80px;">
                        <div style="padding-top:30px;padding-left:20px;padding-down:20px;">
                            <h2 style="color:white;">KwizBot<sub>(beta)<sub></h1>
                            <p id="username"></p>							
                        </div>
                    </div>	
					
                    <div class="uk-vertical-align uk-text-center" style="height: 520px;">
                        <div class="uk-vertical-align-middle uk-width-1-2">
						   <h2>MIC KICKOFF 2k16<br><sub>LIVE QUIZ<sub></h2>		
							 <br>
							 <?php		
                                session_start();							 
							    include 'connection.php';
					            try{
                                  $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
                                  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                                  $sql_select = "SELECT * FROM question where no=(SELECT active FROM question WHERE no=0)";
                                  $stmt = $conn->query($sql_select);
                                  $registrants = $stmt->fetchAll(); 
					              foreach($registrants as $registrant) {
									 $no = $registrant['no'];
									 $question = $registrant['question'];
									 $hint = $registrant['hint'];
									 $_SESSION['answer'] = $registrant['answer'];
									 $_SESSION['no']=(int)$no;
									 $_SESSION['username']="loga";
									 $_SESSION['email']="loga@gmail.com";
									 echo "<h2>".$no.". ".$question."<br><sub>(HINT: ".$hint.")</sub><br></h2>";
								  }
								  
								 
                              }
                             catch(Exception $e){
                                var_dump($e);
                              }
							    
							 ?>
							 
							 
							 
							 <form class="uk-form uk-form-stacked" action="update.php" method="post">

                            <div class="uk-form-row">
                                
                                <div class="uk-form-controls">
                                    <input name="answer" style="width:250px;height:50px;font-size : 20px;" placeholder="Type your answer here" class="uk-width-1-1" type="text" required maxlength="255">
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-form-controls">
								    <a class="uk-button uk-button-primary uk-button-large" href="leaderboard.php" style="border-radius:5px;width:250px;height:50px;font-size : 20px;">View Leader-board</a>
                                    <button name="send" class="uk-button uk-button-primary" style="border-radius:5px;width:100px;height:50px;font-size : 20px;" >Send</button>
                                </div>
                            </div>
                          </form>
                        </div>
						
						
                    </div>
                    <div style="Background:grey; height: 60px;padding-down:10px;padding-left:20px;padding-top:20px;">
                            <h5 style="color:white;">Powered by CyberKnights.in</h4>							
                    </div>	
					
</body>
</html>