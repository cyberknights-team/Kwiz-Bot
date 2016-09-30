<?php
$session_start();
    if(!empty($_POST)) {
		if(strtolower($_POST['answer'])==strtolower($_SESSION['answer'])){
	include 'connection.php';
try {
    date_default_timezone_set("UTC");
	
	$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
    // Insert data
    $sql_insert = "UPDATE leads SET question= ?, username= ? , email= ? ,tstamp= ? WHERE question=".$_SESSION['no']." and username='Not yet answered'";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $_SESSION['no']);
	$stmt->bindValue(2, $_SESSION['username']);
	$stmt->bindValue(3, $_SESSION['email']);
	$stmt->bindValue(4, (string)time());
	$stmt->execute();
	
	header("Location:http://www.cyberknights.in/quiz/start?id=y");
}
catch(Exception $e) {
	echo "wrong answer";
	header("Location:http://www.cyberknights.in/quiz/start?id=n");
    var_dump($e);
}
		}
		else
		{
			echo "wrong answer";
			header("Location:http://www.cyberknights.in/quiz/start?id=n");
		}
}
else
{
	echo "Error";
}



?>