<html>

<head>
<link type="text/css" rel="stylesheet" href="1style.css">
<title>smartcityworkercrew.com</title>
</head>
<body bgcolor="#F0FFFF">

<div id="bar">


<div id="right">
   <table cellpadding="7" cellspacing="10" >
   <tr>
    <td><a href="main.php" style="text-decoration:none"><div id="h1">Home</div></td>
   <td><a href="editprofile.php" style="text-decoration:none"><div id="h1">Profile</div></td>
   <td><a href="main1.html" target=_top style="text-decoration:none"><div id="h1">Logout</div></td>
   </tr>
	</table>
</div>

	 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center>
<?php
session_start();
$uid=$_SESSION["userid"];
$itag= "<img src='members/$uid/photo.jpg' width=50% class=profilephoto title='Change Profile Photo' >";
echo "$itag";

$arr=file("members/$uid/info.txt");

?>
<hr color=silver size=1px >
<span class=subtitle >
<?php echo $arr[0]; ?>
</span>
<hr color=silver size=1px >
<table cellspacing=5px cellpadding=5px >
<tr><td class=menubar > <a href=main.php class=menubar target=f2 >Home</a></td></tr>
<tr><td class=menubar > <a href=editprofile.php class=menubar >Edit Profile</a></td></tr>

<tr><td class=menubar > <a href=changepwd.php class=menubar target=_top >Change Password</a></td></tr>
<tr><td class=menubar > <a href=main1.html class=menubar target=_top >Logout</a></td></tr>
</table>
</center>


     </div>
<table cellpadding="8" cellspacing="5"><tr><td><div id="h1">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; 
</span></td>
</div>
</table>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<pre>             <div id="margin"><img src="logo.jpg"></div></pre>

 <div id="mar">
 <img src="smartcity.jpg"  width="1335" height="580">
 </div>
<br>


<center><h1 id=cyf>Choose Your Type of Workers</h1></center>
<center>
<table id="tb1" cellspacing="10">
<tr><td>View All</td>
    <td>Education</td>
	<td>Health</td>
	<td>Maintainance</td>
</tr>
</table>
</center>
<center>
<table cellspacing="50px" cellpadding="1px">
<tr><td id="modules"><fieldset border="0"><legend><img src="cr.jpg"></legend><a href="carpenter.html" style="text-decoration:none" >Carpenters</a></filedset></td>
    <td id="modules"><fieldset border="0"><legend><img src="pl.jpg"></legend><a href="plumber.html" style="text-decoration:none">Plumbers</filedset></td>
</tr>
<tr><td id="modules"><fieldset border="0"><legend><img src="ma.jpg"></legend><a href="mechanic.html" style="text-decoration:none">Machenic</filedset></td>
    <td id="modules"><fieldset border="0"><legend><img src="bl.jpg"></legend><a href="builder.html" style="text-decoration:none">Builders</filedset></td>
</tr>	
<tr><td id="modules"><fieldset border="0"><legend><img src="dr.jpg"></legend><a href="driver.html" style="text-decoration:none">Drivers</filedset></td>
    <td id="modules"><fieldset border="0"><legend><img src="el.jpg"></legend><a href="electrician.html" style="text-decoration:none">Electrician</filedset></td>
</tr>	
<tr><td id="modules"><fieldset border="0"><legend><img src="pn.jpg"></legend><a href="painter.html" style="text-decoration:none">Painters</filedset></td>
    <td id="modules"><fieldset border="0"><legend><img src="cn.jpg"></legend><a href="" style="text-decoration:none">Counselors</filedset></td>
</tr>	
</table>
</center>
<hr>

<div id="endbar">
<br>
<table id="end"  cellpadding="20" cellspacing="20">
<tr>
<td>About Us</td>
<td id="pad">Terms Of Use</td>

</tr><tr>
<td>Contact Us</td>
<td id="pad">Need Help</td>

</tr><tr>
<td>Share Us</td>
<td id="pad"><a href="main1.html"><div id="cole">Log Out</td>
</tr>
</table>

<center>
<hr id="rotate" width="220px">
</center>
</div>
<div id ="ml">
<img src="log.jpg"> <h5>Choose The Best Worker For Your Problems With Us. We Will Provides Instant Solutions With Least Of Expendature And Experienced Workers.
</div>
<div id="l1"><hr>
</div>



</body>
</html>
