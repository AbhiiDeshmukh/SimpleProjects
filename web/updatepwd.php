<?php
$npwd=$_POST["newpwd"];
$opwd=$_POST["oldpwd"];

session_start();
$uid=$_SESSION["userid"];

$orgpwd=file_get_contents("members/$uid/pwd.txt");
if($orgpwd==$opwd)
{
	file_put_contents("members/$uid/pwd.txt",$npwd);
	$msg="Password Changed Successfully..";
}
else
	$msg="Invalid Old Password";
?>

<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<br>
<br>
<div class=mainbox style="height:600px" >
<h2>Change Password</h2>
<hr>
<?php echo $msg; ?>
<hr>
</div>
</body>
</html>