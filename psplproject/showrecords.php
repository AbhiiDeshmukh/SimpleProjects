

<?php

echo "<h1>Record</h1><hr>";

mysql_connect("localhost","root","");
mysql_select_db("pspl_db");



$s = "select name from enquiry;";
$result = mysql_query($s);
$row=mysql_fetch_row($result);

        echo "
		<center>
		<table cellpadding=10px cellspacing=10px border=1px;>
		<tr><td>ID</td>
			<td>$row[0]</td>
		</tr>
		<tr><td>Username</td>
			<td>$row[1]</td>
		</tr><br><br>
		</table>
		</center>
		";
?>