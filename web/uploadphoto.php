<?php
session_start();
$uid=$_SESSION["userid"];

$src=$_FILES["photo"]["tmp_name"];
$dest="members/$uid/album/".$_FILES["photo"]["name"];
move_uploaded_file($src,$dest);

header("location: album.php");
?>