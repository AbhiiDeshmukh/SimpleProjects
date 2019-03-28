<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<br>
<br>
<div class=mainbox style="height:600px" >
<?php
session_start();
$uid=$_SESSION["userid"];
$upath="members/$uid";
$arr=File("$upath/info.txt");
?>

<table class=grid width=100%  >
<tr><td colspan=2 ><h2>Profile</h2><hr></td></tr>
<tr><td style="width:150px" >Name</td><td><?php echo $arr[0]; ?></td></tr>
<tr><td>Address</td><td><?php echo $arr[1]; ?></td></tr>
<tr><td>ContactNo</td><td><?php echo $arr[2]; ?></td></tr>
<tr><td>EmailID</td><td><?php echo $uid; ?></td></tr>
<tr><td>BirthDate</td><td><?php echo $arr[3] ?></td></tr>
<tr><td>Gender</td><td><?php echo $arr[4] ?></td></tr>
</table>
</div>
</body>
</html>