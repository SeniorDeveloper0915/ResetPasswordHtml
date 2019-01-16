<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reset Password</title>
</head>
 
<body bgcolor="#CCFF66">
<div align="center">
 
	<h3 style="color:#F00;font-size: 35px;">Reset Password</h3>
		Password:
		<input type="password" name="password" id="password"><br><br>
		Confirm:
		<input type="password" name="repassword" id="repassword" onkeyup="checkConfirm()"><br><br>
		<input type="text" name="token" id="token" value="<?php echo $_REQUEST['token']; ?>" hidden>
		<input type="button" value="Reset" id="reset" onclick="resetPassword()" disabled="true">
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

</body>
</html>

<script>
	function checkConfirm() {
		var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		if ( password.trim() === repassword.trim() )
			document.getElementById("reset").disabled = false;
		else
			document.getElementById("reset").disabled = true;
	}
	function resetPassword() {
		// body...
		var password = document.getElementById("password").value;
		// var token 	 = document.getElementById("token").value;
		var token = document.getElementById("token").value;
		var data = {"password" : password, "token" : token}
		var url = "http://18.235.201.14:8080/api/v1/resetpassword";
		// var url = "http://18.235.201.14:8080/api/v1/resetpassword?password=" + password + "&token=" + token;
		$.ajax({
            type: 'POST',
            url: url,
            data: {
            	password : password,
            	token    : token
            },
            async: false,
            success: function (json) {
            	alert("Password successfully changed!");
            	document.getElementById("password").value = "";
            	document.getElementById("repassword").value = "";
            },
            error: function (error) {
            	console.log(error);
            }
        });
	}
</script>