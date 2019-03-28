<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<br>
<center>
<?php
session_start();
$uid=$_SESSION["userid"];
$itag= "<img src='members/$uid/photo.jpg' width=50% class=profilephoto title='Change Profile Photo' >";
echo "<a href=changephoto.php target=f2 >$itag</a>";

$arr=file("members/$uid/info.txt");

?>
<hr color=silver size=1px >
<span class=subtitle >
<?php echo $arr[0]; ?>
</span>
<hr color=silver size=1px >
<table cellspacing=5px cellpadding=5px >
<tr><td class=menubar > <a href=home.php class=menubar target=f2 >Home</a></td></tr>
<tr><td class=menubar > <a href=editprofile.php class=menubar target=f2 >Edit Profile</a></td></tr>
<tr><td class=menubar > <a href=album.php class=menubar target=f2 >Album</a></td></tr>
<tr><td class=menubar > <a href=changepwd.php class=menubar target=f2 >Change Password</a></td></tr>
<tr><td class=menubar > <a href=index.php class=menubar target=_top >Logout</a></td></tr>
</table>
</center>
</body>
</html>