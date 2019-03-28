<?php

$nm=$_POST["name"];
$add=$_POST["add"];
$ct=$_POST["city"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$ref=$_POST["ref"];
$serv=$_POST["serv"];
$sub=$_POST["sub"];
$delt=$_POST["detl"];
$rev=$_POST["rev"];

mysql_connect("localhost","root","");
mysql_select_db("pspl_db");

$s="insert into enquiry(name,address,city,mobileno,email,reference,service,subject,detail,review) values('".$nm."',
'".$add."','".$ct."','".$mob."','".$email."','".$ref."','".$serv."','".$sub."','".$delt."','".$rev."');";

if(mysql_query($s)){
	echo "Registrer sucessfull.........";
}
else{
	echo "Server error........";
}
?>