<?php
	$login = $_POST['login'];
	$password = $_POST['password'];

	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error());
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		global $link;
		
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($link, $str);
		echo("Successfully cleaned values");
	}
	
	//Sanitize the POST values
	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	
	//Input Validations
	if($login == '' || $password == '') {
		$errmsg_arr[] = 'Login ID or Password missing';
		$errflag = true;
	}

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login-form.php");
		exit();
	}
	
			$qry="SELECT * FROM login_hist WHERE member_id='$login' AND year(logout_dttm)=0";
			$result=mysqli_query($link, $qry);
			if(mysqli_num_rows($result) == 1) {
				header("location: member-index2.php");
				exit();
			}
			
	//Create query
		//Hashing Password
		$hash = md5($password);
	$qry="SELECT * FROM members	WHERE login='$login' AND passwd='$hash'";
	$result=mysqli_query($link, $qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) == 1) {
			
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
      
			//Insert login history
			$qry="INSERT INTO login_hist (member_id, login_dttm) VALUES ('".$member['member_id']."',CURRENT_TIMESTAMP)";
			$result=mysqli_query($link, $qry);
			
			//Get login timestamp
			$qry="SELECT max(login_dttm) as login_dttm FROM login_hist WHERE member_id='".$member['member_id']."' AND year(logout_dttm)=0";
			$result=mysqli_query($link, $qry);
			$timestamp = mysqli_fetch_assoc($result);
			$_SESSION['SESS_LOGIN_DTTM'] = $timestamp['login_dttm'];

			session_write_close();
			header("location: member-index.php");
			exit();
		}else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>