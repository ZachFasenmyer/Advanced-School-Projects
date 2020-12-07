<?php	
	require_once('auth.php');

	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$education = $_POST['education'];

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
	
	/*Sanitize the POST values
	$phone = clean('$phone');
	$address = clean('$address');
	$email = clean('$email');
	$education	= clean('$education');*/
	
	//Input Validations
	if($phone == '') {
		$errmsg_arr[] = 'Phone missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'Address missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($education == '') {
		$errmsg_arr[] = 'Education missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: edit-profile.php");
		exit();
	}
	//Create UPDATE query
		
	$id = $_SESSION['SESS_MEMBER_ID'];
	$qry = "UPDATE members SET phone = '$phone', address = '$address', 
			email = '$email', education = '$education'
			WHERE member_id = $id";
	$result = mysqli_query($link, $qry);
	//Check whether the query was successful or not
	if($result) {
		header("location: member-profile.php");
		exit();
	}else {
		die("Query failed");
	}
?>