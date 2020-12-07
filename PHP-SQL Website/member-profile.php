<?php
	require_once('auth.php');
	
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

	//Getting variables to display - QUERIES SUCCESSFUL (Tested)
	$id = $_SESSION['SESS_MEMBER_ID'];
	
	$qry="SELECT * FROM members	WHERE member_id = $id";
	$result=mysqli_query($link, $qry);
	
	//Establishing Session variables
	if($result) {
			$member = mysqli_fetch_assoc($result);
			
			$_SESSION['SESS_PHONE'] = $member['phone'];
			$_SESSION['SESS_ADDRESS'] = $member['address'];
			$_SESSION['SESS_EMAIL'] = $member['email'];
			$_SESSION['SESS_EDUCATION'] = $member['education'];
		} else {
			die("Query Failed");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Profile</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />


<div id="wrapper"> 

	<div id="header" ><p style="text-align:right; font-size:50px; font-weight:bold; padding: 50px 40px 0 0;">Thunder</p></div>

</head>
<body>
<h1>My Profile </h1>
<a href="member-index.php">Home</a> | <a href="logout.php">Logout</a>
<p>This page is secured. </p>
<a href="edit-profile.php">Edit Profile</a>
<div>
<p>Phone: <?php echo $_SESSION['SESS_PHONE'];?></p>
</div>
<div>
<p>Address: <?php echo $_SESSION['SESS_ADDRESS'];?></p>
</div>
<div>
<p>Email: <?php echo $_SESSION['SESS_EMAIL'];?></p>
</div>
<p>Education: <?php echo $_SESSION['SESS_EDUCATION'];?></p>
</body>
</html>