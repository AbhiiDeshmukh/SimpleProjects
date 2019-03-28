<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<br>
<br>
<div class=mainbox style="height:600px" >
<h2>Album</h2>
<hr>
<form action=uploadphoto.php method=post enctype="multipart/form-data" >
Select Photo:<input type=file name=photo  accept="image/*"  required >
<input type=submit value=Upload >
</form>
<hr>
<?php
session_start();
$uid=$_SESSION["userid"];

$arr=scandir("members/$uid/album");
foreach($arr as $iname)
{
	if($iname=="." || $iname==".."||$iname=="Thumbs.db")
		continue;

$itag="<img src='members/$uid/album/$iname' height=100px class=photo > ";
$atag="<a href='members/$uid/album/$iname' target=xyz >$itag</a>";
echo $atag;
}



?>
</div>
</body>
</html>