<?php
		
$email=$_POST["unam"];
$pwd=$_POST["pwd"];

session_start();
$_SESSION["unam"]=$email;
$_SESSION["pwd"]=$pwd;

mysql_connect("localhost","root","");
mysql_select_db("abhishek");

$s="select * from register where email='"."$email"."' and pass='"."$pwd"."';";

$res=mysql_query($s);
$count=mysql_num_rows($res);

if($count)
{
	echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='style.css'>
		</head>
		<body style=font-size:15px>";
	echo "Login Sucessfully............<br><br>";
	echo "<a href='editprof.php'> <input class='boxbtn' type='button' value='Update records' ></a>";
	echo "<a href='deleteprof.php'> <input class='boxbtn' type='button' value='Remove record' ></a>";
	echo "</body></html>";
}
else{
	echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='main.css'>
		</head>
		<body style=font-size:15px>";
	echo "Incorrect ID OR Password..........<pre> 
	<h1><a href='loginform.html'>Home</a><h1>
	</pre>";
}



?>