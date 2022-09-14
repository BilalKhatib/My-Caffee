<?php 
require 'db.php';
session_start();
 ?>    
 <?php

// Escape Username to protect against SQL injections
$username = $con->escape_string($_POST['login-username']);
$password = $con->escape_string($_POST['login-password']);
$result = $con->query("SELECT * FROM users WHERE username='$username'");

if (empty($username)) {
	//username is empty , cannot login
	echo "Username required !";
}else{
	//Username is not empty , continue ...
	if (empty($password)) {
	 	//password is empty , cannot login
	 	echo "password required";
	 } else {
	 	//password not empty , continue ...
	 	if ($result->num_rows == 0 ) {
	 		//Username doens't exist , cannot login
	 		echo "Username not found";
	 	}else{
	 		//Username found , continue ...
	 		//fetch user details from database
	 		$user = $result->fetch_assoc();
	 		//check user's password 
	 		if (password_verify($password, $user['password'])) {
	 			//password is correct , continue ...
	 			$_SESSION['Username'] = $user['Username'];
 				$_SESSION['logged_in'] = true;
	 			$true = True;
	 			header("location: stock.php");
	 			
	 		}else{
	 			//password is incorrect !
	 			echo "password incorrect , try again !";
	 			
	 		}
	 	}
	 }
}
$today = date('20y-m-d');
$update_date = $con->query("INSERT INTO statistics (date1 , total_earnings) VALUES ( '$today' , '0' )");
$get_dates = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");

if ($get_dates->num_rows == 0) {
	$con->query($update_date);
}else{
	
}




