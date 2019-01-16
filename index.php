<?php
	echo $_REQUEST['token'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reset Password</title>
</head>
 
<body bgcolor="#CCFF66">
<form action="http://18.235.201.14:8080/api/v1/resetpassword" align="center" method="put">
 
<h3 style="color:#F00;font-size: 35px;">Reset Password</h3>
Password:
<input type="password" name="password" id="password"><br><br>
 
E-mail: 
<input type="text" name="name" id="name"><br><br>
<input type="submit" value="Reset">
</form>
</body>
</html>