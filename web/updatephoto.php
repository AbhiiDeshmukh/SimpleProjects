<?php
session_start();
$uid=$_SESSION["userid"];

$src=$_FILES["photo"]["tmp_name"];
$dest="members/$uid/photo.jpg";
move_uploaded_file($src,$dest);
header("location: links.php");
?>