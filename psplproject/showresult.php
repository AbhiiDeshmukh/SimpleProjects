

<?php

echo "<h1>Record</h1><hr>";

mysql_connect("localhost","root","");
mysql_select_db("pspl_db");


$cnt = mysql_num_rows(mysql_query("SELECT * FROM enquiry"));
echo $cnt;

 echo "
		<form method=post>
		<center>
		<table cellpadding=50px cellspacing=10px border=1px;>";

for($i=1;$i<=$cnt;$i++)
{
    $s = "SELECT `name` FROM `enquiry` WHERE `ID` = '$i' ";
	$result = mysql_query($s);
	$row=mysql_fetch_row($result);
	
	echo "<tr><td>$i</td>
			<td>$row[0]</td>
			<td><a href='show.php'><input type='button' name=.'"$i"'.>Show</button></a>
				<a href='update.php'><input type='button' name=.'"$i"'.>Update</button></a>
				<a href='delete.php'><input type='button' name=.'"$i"'.>Delete</button></a>
			</td>
		</tr>";
}

        echo "
		
		</table>
		</center>
		";
		
?>