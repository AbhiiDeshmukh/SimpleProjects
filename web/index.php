<?php

if(array_key_exists("login",$_GET))
	$loginmsg="Invalid UserID/Pwd";
else
	$loginmsg="";
?>
<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<center>
<br>
<h1>
Album Management System
</h1>
<img src=images/star.png height=400px >
<br>
<form action=login.php method=post >
<table class=smallbox >
<tr><td>EmailID</td><td><input type=email name=userid size=20 required  ></td></tr>
<tr><td>Password</td><td><input type=password name=pwd size=20  required ></td></tr>
<tr><td></td><td><input type=submit value=Login ></td></tr>
<tr><td colspan=2 style="text-align:center;color:red" ><?php echo $loginmsg; ?></td></tr>
</table>
</form>
<br>
<a href=regfrm.php ><img src=images/register.png ></a>
</center>
</body>
</html>