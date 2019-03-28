<?php

echo "<h2>Record</h2> 
	<h4><a href='loginform.html'>Home</a><h4>
<hr>";

mysql_connect("localhost","root","");
mysql_select_db("abhishek");



$s = "select * from register;";
$result = mysql_query($s);
$row=mysql_fetch_row($result);
		
		echo "<html>
		<head>
		<link type='text/css' rel='stylesheet' href='main.css'>
		</head>
		<body style=font-size:15px>";
		
        echo "
		<center>
		<table cellpadding=10px cellspacing=10px border=1px;>
		<tr><td>ID</td>
			<td>$row[0]</td>
		</tr>
		<tr><td>Username</td>
			<td>$row[1]</td>
		</tr>
		<tr><td>email</td>
			<td>$row[2]</td>
		</tr>
		<tr><td>password</td>
			<td>$row[3]</td>
		</tr>
		<tr><td>firstname</td>
			<td>$row[4]</td>
		</tr>
		<tr><td>lastname</td>
			<td>$row[5]</td>
		</tr>
		<tr><td>gender</td>
			<td>$row[6]</td>
		</tr><br><br>
		</table>
		</center>
		";
		

?>