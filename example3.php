<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';
	$conn = mysqli_connect($servername, $username, $password);

	// if(!$conn) {
	// 	die("Connection failed: ".mysqli_connect_error());
	// }
	// echo "Connected successfully";

		if(!$db_status) {
		error("DB_ERROR");
		exit;
	}
	$query="INSERT INTO userinfo VALUES('$_POST['username']'.'$_POST['email']')";
	$result= mysql_query($query);
	if(!$result){
		print "입력되었습니다.</br>";
	} else {
		print "입력되지 않았습니다. </br>";
	}

?>