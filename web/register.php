<?php
//retrive submitted data
$nm=$_POST["name"];
$ad=$_POST["address"];
$ed=$_POST["emailid"];
$cn=$_POST["contactno"];
$gd=$_POST["gender"];
$bd=$_POST["bdate"];
$pw=$_POST["pwd"];



//check if user is already registered or not
$upath="members/$ed";
if(!file_exists($upath))
{
	//create user folders
	mkdir($upath);
	mkdir("$upath/album");
	
	//store pwd into file pwd.txt
	file_put_contents("$upath/pwd.txt",$pw);
	
	//store info into info.txt
	$info="$nm\n$ad\n$cn\n$bd\n$gd";
	file_put_contents("$upath/info.txt",$info);
	
	//store photo into photo.jpg
	$src=$_FILES["photo"]["tmp_name"];
	$dest="$upath/photo.jpg";
	move_uploaded_file($src,$dest);
	
	$msg="You are sucessfully Registered..";
	
	
}

else
	$msg="You are already Registered..or check your mailid";


?>
<html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<center>
<br><br><br><br><br>
<table class=smallbox >
<tr><td colspan=2 ><img src=images/registration_header.jpg width=700px > </td></tr>
<tr><td><a href=index.php ><img src=images/home.jpg height=40px ></a> </td><td><?php echo $msg; ?></td></tr>
<tr><td colspan=2 ><hr color=gray size=10px ></td></tr>
</table>
</center>
</body>
</html>









