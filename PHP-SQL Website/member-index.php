<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />


<div id="wrapper"> 

	<div id="header" ><p style="text-align:right; font-size:50px; font-weight:bold; padding: 50px 40px 0 0;">Thunder</p></div>

</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="member-profile.php">My Profile</a> | <a href="logout.php">Logout</a>
<div>
<a href = "index.html">Website Home</a>
</div>
<p>This is a password protected area only accessible to members. </p><br></br>

</body>
</html>
