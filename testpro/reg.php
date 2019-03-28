<?php

$usrnm=$_POST["usr"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["conpwd"];
$nm=$_POST["nam"];
$lnm=$_POST["lnam"];
$gen=$_POST["gender"];


mysql_connect("localhost","root","");
mysql_select_db("abhishek");

if($pwd==$cpwd){
$s="insert into register(username,email,pass,firstname,lastname,gender) values('".$usrnm."','".$email."','".$pwd."','".$nm."','".$lnm."','".$gen."')";

if(mysql_query($s)){
	echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='main.css'>
		</head>
		<body style=font-size:15px>";
	echo "register successfully<pre> 
	<h3><a href='loginform.html'>Home</a></h3>
	</pre>";
}
else{
	echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='main.css'>
		</head>
		<body style=font-size:15px>";
	echo "user Already exist<pre> 
	<h3><a href='loginform.html'>Home</a></h3>
	</pre>";
}


}
else{
	echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='main.css'>
		</head>
		<body style=font-size:15px>";
	echo " check password<pre> 
	<h3><a href='loginform.html'>Home</a></h3>
	</pre>";
}

?>