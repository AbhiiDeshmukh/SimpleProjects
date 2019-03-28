<?php

//retrive submitted data
$uid=$_POST["userid"];
$pwd=$_POST["pwd"];

//check if user exists or not
$upath="members/$uid";
if(file_exists($upath))
{
	//retrive original pwd
	$orgpwd=file_get_contents("$upath/pwd.txt");
	if($orgpwd==$pwd)
	{
		session_start();
		$_SESSION["userid"]=$uid;
		header("location: main.php");
	}
	else
		header("location:  main12.html");
}
else
	header("location:  main12.html");

?>