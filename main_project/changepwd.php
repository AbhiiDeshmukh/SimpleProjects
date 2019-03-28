<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<br>
<br>
<div class=mainbox style="height:600px" >
<h2>Change Password</h2>
<hr>
<form action=updatepwd.php name=frm  method=post  >
<table class=grid >
<tr><td>Old Password</td><td><input type=password name=oldpwd size=20 required ></td></tr>
<tr><td>New Password</td><td><input type=password name=newpwd size=20 required ></td></tr>
<tr><td>Confirm</td><td><input type=password name=confirm size=20 onblur=checkpwd() required ></td></tr>
<tr><td></td><td><input type=submit value=Change ></td></tr>
</table>
</form>
<hr>
</div>
</body>
</html>

<script>
function checkpwd()
{
	if(document.frm.newpwd.value!=document.frm.confirm.value)
	{
		alert('New Password not matching with Confirm Password');
		document.frm.newpwd.value="";
		document.frm.confirm.value="";
	}
}
</script>
