<?php

session_start();
$email=$_SESSION["unam"];

$usrnm=$_POST["usr"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["conpwd"];
$nm=$_POST["nam"];
$lnm=$_POST["lnam"];
$gen=$_POST["gender"];


mysql_connect("localhost","root","");
mysql_select_db("abhishek");

if($pwd==$cpwd){
$s="update register set username='".$usrnm."',pass='".$pwd."',firstname='".$nm."',lastname='".$lnm."',gender='".$gen."'where email='".$email."'";

if(mysql_query($s)){
	echo "Updated successfully<pre> 
	<h1><a href='loginform.html'>Home</a><h1>
	</pre>";
}
else{
	echo "Can't update right now<pre> 
	<h1><a href='loginform.html'>Home</a><h1>
	</pre>";
}


}
else{
	echo "Rewrite password<pre> 
	<h1><a href='loginform.html'>Home</a><h1>
	</pre>";
}

?>