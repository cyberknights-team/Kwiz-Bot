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
                    <div style="Background:grey; height: 80px;">
                        <div style="padding-top:30px;padding-left:20px;padding-down:20px;">
                            <h2 style="color:white;">KwizBot<sub>(beta)<sub></h1>
                            <p id="username"></p>							
                        </div>
                    </div>	
                    <div class="uk-vertical-align uk-text-center" style="height: 520px;">
                        <div class="uk-vertical-align-middle uk-width-1-2" style="border-right: thick solid grey;">
						   <h2>MIC KICKOFF 2k16<br><sub>LIVE QUIZ<sub></h2>		
							<center>
	                          <div class="g-signin2" data-onsuccess="onSignIn"></div>
							  
                            </center>
                        </div>
						<div class="uk-vertical-align-middle uk-width-1-2">
                            <h3>Instruction</h3>
							<h4>Nothing to display</h4>
							<br>
							  <a class="uk-button uk-button-primary uk-button-large" href="leaderboard.php">View Leader-board</a>
                        </div>
                    </div>
                    <div style="Background:grey; height: 60px;padding-down:10px;padding-left:20px;padding-top:20px;">
                            <h5 style="color:white;">Powered by CyberKnights.in</h4>							
                    </div>	


 
 
<script type="text/javascript">
/*window.onLoadCallback = function(){
  gapi.auth2.init({
      client_id: '783793860345-stqlaq01bi4jbb0isdetd68vdbsdvqqv.apps.googleusercontent.com'
    });
}*/

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  
  if(profile.getEmail().indexOf("@st.niituniversity.in") == -1)
  {
       sweetAlert("Wrong domain", "Signout from other google account and signin with @st.niituniversity.in domain", "error");
       signOut();
  }
  else
  {
    sweetAlert("Welcome "+profile.getName(),"Welcome to MIC Kickoff LIVE QUIZ 2k16","success");
	<?php
	   header("Location:start.php");
	?>
  }
  
  }
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  
}

</script>
</body>
</html>