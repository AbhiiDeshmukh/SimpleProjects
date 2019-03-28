 <html>
<link href=mystyle.css type=text/css rel=stylesheet />
<body class=page >
<center>
<br><br><br><br><br>
<form action=register.php method=post name=frm enctype="multipart/form-data" >
<table class=smallbox >
<tr><td colspan=2 ><img src=images/registration_header.jpg width=700px > </td></tr>
<tr><td>Name</td><td><input type=text name=name size=80 required ></td></tr>
<tr><td>Address</td><td><input type=text name=address size=80  required ></td></tr>
<tr><td>ContactNo</td><td><input type=text name=contactno size=80  required ></td></tr>
<tr><td>EmailID</td><td><input type=email name=emailid size=80  required ></td></tr>
<tr><td>Photo</td><td><input type=file name=photo accept="image/*" size=80  required ></td></tr>
<tr><td>BirthDate</td><td><input type=date name=bdate size=20  required ></td></tr>
<tr><td>Gender</td><td><input type=radio name=gender value=Male > Male <input type=radio name=gender value=Female > Female </td></tr>
<tr><td>Password</td><td><input type=password name=pwd size=20  required ></td></tr>
<tr><td>Confirm</td><td><input type=password name=confirm size=20  required onblur=checkpwd() ></td></tr>
<tr><td><a href=index.php ><img src=images/home.jpg height=40px ></a> </td><td><input type=submit value=Register ></td></tr>
<tr><td colspan=2 ><hr color=gray size=10px ></td></tr>
</table>
</form>
</center>
</body>
</html>

<script>
function checkpwd()
{
	if(document.frm.pwd.value!=document.frm.confirm.value)
	{
		alert('Password not Matching with Confirm Value');
		document.frm.pwd.value="";
		document.frm.confirm.value="";
	}
}
</script>
