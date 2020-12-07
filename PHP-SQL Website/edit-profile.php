<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />


<div id="wrapper"> 

	<div id="header" ><p style="text-align:right; font-size:50px; font-weight:bold; padding: 50px 40px 0 0;">Thunder</p></div>

</head>

<body>
<form id="loginForm" name="loginForm" method="post" action="edit-profile-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Phone Number </th>
      <td><input name="phone" type="text" class="textfield" id="phone" /></td>
    </tr>
    <tr>
      <th>Address </th>
      <td><input name="address" type="text" class="textfield" id="address" /></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><input name="email" type="text" class="textfield" id="email" /></td>
    </tr>
    <tr>
      <th>Highest Level of Education</th>
      <td><input name="education" type="text" class="textfield" id="education" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit Changes" /></td>
    </tr>
  </table>
</form>
</body>
</html>