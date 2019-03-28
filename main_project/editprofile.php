<html>
<link href=st.css type=text/css rel=stylesheet />
<body class=page>
<br>
<br>
<center>
<div class=mainbox style="height:600px" >
<?php
session_start();
$uid=$_SESSION["userid"];
$upath="members/$uid";
$arr=file("$upath/info.txt");
?>

<form action=updateprofile.php target=_top >
<input type=hidden name=gender value='<?php echo $arr[4]; ?>' >
<table class=smallbox  id="rcorners3">
<tr><td colspan=2 id="email">Edit Profile<hr></td></tr>
<tr><td  id="email">Name</td><td  id="email"><input type=text name=name size=70 value='<?php echo $arr[0]; ?>' ></td></tr>
<tr><td  id="email">Address</td><td  id="email"><input type=text name=address size=70 value='<?php echo $arr[1]; ?>' ></td></tr>
<tr><td  id="email">ContactNo</td><td  id="email"><input type=text name=contactno size=70 value='<?php echo $arr[2]; ?>' ></td></tr>
<tr><td  id="email">BirthDate</td><td  id="email"><input type=text name=birthdate size=70 value='<?php echo $arr[3]; ?>' ></td></tr>
<tr><td></td><td><input type=submit value=Update ></td></tr>
</table>
</form>
</div>
</center>
</body>
</html>