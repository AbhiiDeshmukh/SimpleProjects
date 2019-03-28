<?php

$uid=$_POST["uid"];
$pwd=$_POST["pwd"];

$name="srsadmin";
$pd="srs123";

if($uid==$name && $pwd==$pd){
	header('Location: adminpanel.php');
}
else{
	echo "Enter valid id or password";
	
	echo '<br><hr><a href="adminlogin.html"> <input type="button" value="Home"> </a>';
}

?>