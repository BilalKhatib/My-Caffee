<?php

require 'db.php';


// Set session variables to be used on profile.php page
$_SESSION['username'] = $_POST['register-username'];
$_SESSION['email'] = $_POST['register-email'];
$_SESSION['password'] = $_POST['register-password'];
$_SESSION['repeatpassword'] = $_POST['register-repeat-password'];



// Escape all $_POST variables to protect against SQL injections
$username = $con->escape_string($_POST['register-username']);
$email = $con->escape_string($_POST['register-email']);
$password = $con->escape_string(password_hash($_POST['register-password'], PASSWORD_BCRYPT));
$repeatpassword = $con->escape_string(password_hash($_POST['register-repeat-password'], PASSWORD_BCRYPT)); 


//check if inputs are empty or no !
if (empty($username) or empty($email) or empty($_POST['register-password']) or empty($_POST['register-repeat-password'])) {
	echo "All Inputs are Required !";
}else{
//no empty inputs , continue !
//check if email already exist !
	$email_check = $con->query("SELECT * FROM users WHERE email = '$email'");
	if ($email_check->num_rows > 0) {
	//email already in use 
	echo "email already in use , choose another one !";
	}else{
		//check if username is already in use !
		$username_check = $con->query("SELECT * FROM users WHERE username = '$username'");
		if ($username_check->num_rows > 0) {
			echo "username already in use , choose another one !";
		}else{
			//password must be minimum 8 charachters maximum 20 charachters
			if (strlen($_POST['register-password'])< 8 or strlen($_POST['register-password']) > 20 ) {
				//password is under 8 or more than 20 chars
				echo "password must be at least 8 charachters and maximum 20 charachters";
			}else {
				//password is ready to use
				//check if password = repeated password
				if ($_POST['register-password'] != $_POST['register-repeat-password']) {
					//passwords are differents
					echo "passwords dont match , recheck them !";
				}else{
					//passwords match
					//send users data to users table
					$sql = "INSERT INTO users (username, email, password) " 
            				. "VALUES ('$username' ,'$email','$password')";

            				if ($con->query($sql)) {
            					echo "user added succesfully";
            				}else{
            					echo "Can Not Add User To The Database ! Something Went Wrong !";
            				}
				}
			}
		}
	}

}

?>