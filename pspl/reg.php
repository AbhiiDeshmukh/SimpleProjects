<?php

$user=$_POST["usr"];
$mail=$_POST["email"];
$pass=$_POST["pwd"];
$confpass=$_POST["conpwd"];
$name=$_POST["nam"];
$lname=$_POST["lnam"];
$gender=$_POST["gender"];

if($pass===$confpass){
	
	mysql_connect("localhost","root","");
	mysql_select_db("db_student");
	
	$que="insert into login(username,email,password,firstname,lastname,gender) values('".$user."','".$mail."','".$pass."','".$name."'
	,'".$lname."','".$gender."');";
	
	
	$s="select username,password from login;";
	$rec=mysql_query($s);
	
	$row=mysql_fetch_row($rec);
	
	if(mysql_query($que)){
		echo "Sucessfull !!!";
		
	}
	else{
		echo "User already exists....";
	}
}
else{
	echo("Password does not match");
}


?>
