<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />

<div id="wrapper"> 

	<div id="header" ><p style="text-align:right; font-size:50px; font-weight:bold; padding: 50px 40px 0 0;">Thunder</p></div>

</head>
<body>
<p>&nbsp;</p>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>
<div>
<a href = "register-form.php">New User? Register Here</a>
</div>
<div>
<a href = "index.html">Change your mind? Return To Website Here</a>
</div>
</body>
</html>
