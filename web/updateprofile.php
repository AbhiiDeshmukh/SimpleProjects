<?php
$nm=$_GET["name"];
$ad=$_GET["address"];
$cn=$_GET["contactno"];
$bd=$_GET["birthdate"];
$gd=$_GET["gender"];

$info="$nm\n$ad\n$cn\n$bd\n$gd";


session_start();
$uid=$_SESSION["userid"];
$upath="members/$uid";
file_put_contents("$upath/info.txt",$info);

header("location: main.php");


?>


