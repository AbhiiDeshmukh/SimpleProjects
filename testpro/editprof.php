<?php

session_start();
$email=$_SESSION["unam"];

mysql_connect("localhost","root","");
mysql_select_db("abhishek");

$s = "select * from register where email='"."$email"."';";

$result = mysql_query($s);
$row = mysql_fetch_row($result);

echo '<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">

</head>
<body>

<div id="heading">
<h1>Registration Form</h1>
</div>
<form name=frm method=post action="update.php">
<div id="form">
	
	<div id="text">
		<input type="text" size=40px name="usr" value="'.$row[1].'" title="Username">
		<img src="icon\u.png">
	</div>
	<div id="text">
		<input type="password" size=40px name="pwd" value="'.$row[3].'" title="Password">
		<img src="icon\u1.png">
	</div>
	<div id="text">
		<input type="password" size=40px name="conpwd" value="'.$row[3].'" title="Confirm Password">
		<img src="icon\u1.png">
	</div>

</div>

<div id="form1">
	
	<div id="text">
		<input type="text" size=40px name="nam" value="'.$row[4].'" title="First Name">
		<img src="icon\u.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="lnam" value="'.$row[5].'" title="Last Name">
		<img src="icon\u.png">
	</div>
	<div id="text">
		 <input list="browsers" name="gender" value="'.$row[6].'">
			<datalist id="browsers">
			<option name="gender" value="Male">
			<option name="gender" value="Female">
			</datalist>
	</div>
		<h5><input type="checkbox" name="agree"> I Agree All Terms and Conditions</h5>
		<h5><input type="checkbox" name="agree"> I want to recieve all masseges and notifications </h5>
		
</div>

<div id="form">
	<input class="boxbtn" type="submit" value="Updates">
	<a href="showrel.php"><input class="boxbtn" type="button" value="Show records" ></a>
</div>

</form>
</body>
</html>';


?>