<!DOCTYPE html>
<html class="uk-notouch" dir="ltr" lang="en-gb"><head>
<head>
    <title>KwizBot</title>
	<link rel="stylesheet" href="../bower_components/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" href="../css/uikit.min.css" />
	<link rel="stylesheet" href="table.css" />
    <script src="../js/jquery.js"></script>
    <script src="../js/uikit.min.js"></script>
	<script src="../bower_components/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="783793860345-stqlaq01bi4jbb0isdetd68vdbsdvqqv.apps.googleusercontent.com">
</head>

<body>			
                    <div style="Background:grey; height: 80px;">
                        <div style="padding-top:30px;padding-left:20px;padding-down:20px;">
                            <h2 style="color:white;">KwizBot<sub>(beta)<sub></h1>						
                        </div>
                    </div>	
                    <div class="uk-vertical-align uk-text-center" style="padding-down:20px;padding-top:20px;">
                        <div class="uk-vertical-align-middle uk-width-1-2" >
						  
						  <h2>Leader board</h2>
						  <table class="table-fill" style="width:100%;text-align:center;">
                    <center>						   
						   <tr>
							<th>Q.no</th>
							<th>Username</th>
							<th>Email</th>
							</tr>
                <?php
					include 'connection.php';
					try{
                       $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
                       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                       $sql_select = "SELECT * FROM leads";
                       $stmt = $conn->query($sql_select);
                       $registrants = $stmt->fetchAll(); 
					   foreach($registrants as $registrant) {
						 echo "<tr><td>".$registrant['question']."</td>";
                         echo "<td>".$registrant['username']."</td>";
                         echo "<td>".$registrant['email']."</td></tr>";
		                 
                        }
                    }
            catch(Exception $e){
                die(print_r($e));
            }

        ?>
							
                        </center>							
						  </table>
						  <br><br>
						  <a class="uk-button uk-button-primary uk-button-large" style="border-radius:10px;" href="index.php">Back</a>
						  <br><br>
                        </div>					
                    </div>
                    <div style="Background:grey; height: 60px;padding-down:10px;padding-left:20px;padding-top:20px;">
                            <h5 style="color:white;">Powered by CyberKnights.in</h4>							
                    </div>	
                    
 
 
<script type="text/javascript">


</script>
</body>
</html>