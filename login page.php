<?php
	$user_name = $_POST['uname'];
	$password = $_POST['psw'];
		//datbase connection hear
	$con = new mysqli("localhost","root","","Login");
	if ($con-> connect_error) {
		die("faild to connect:" .$con-> connect_error);
	} else{
		$stmt = $con-> prepare ("select * form registration where username=?");
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows>0){
		$data= $stmt_result->fetch_assoc();
		if($data ['password']===$password){
			echo "<h2> Login successfully</h2";
		}else{
			echo "<h2> Invalid username or password</h2";	
		}
	}else{
		echo "<h2> Invalid username or password</h2";
	}
	}
