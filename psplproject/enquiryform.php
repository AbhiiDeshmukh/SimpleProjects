<html>
<head>
<link type="text/css" rel="stylesheet" href="main.css">

</head>
<body>

<h1>Student Registration System</h1>

<div id="heading">
<h2>Enquiry Form</h2>
</div>
<form name=frm method=post action="reg.php">
<div id="form">
	
	<div id="text">
		<input type="text" size=40px id="name" name="name" placeholder="Name" title="Name" required onblur="valdt_nam()" >
		<img src="icon\u.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="add" placeholder="Address" title="Address" required>
		<img src="icon\u1.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="city" placeholder="City" title="City" required >
		<img src="icon\u1.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="mob" placeholder="Mobile No." title="Mobile" required onblur="valdt_mob()">
		<img src="icon\u1.png">
	</div>
	<div id="text">
		<input type="email" size=40px name="email" placeholder="E-mail ID" title="Email" required>
		<img src="icon\u1.png">
	</div>

</div>

<div id="form1">
	
	<div id="text">
		<input type="text" size=40px name="ref" placeholder="Reference" title="Reference" required>
		<img src="icon\u.png">
	</div>
	<div id="text">
		 <input list="service" name="serv" placeholder="Service" required>
			<datalist id="service">
			<option name="service" value="Software Development" default>
			<option name="service" value="Training">
			<option name="service" value="Other">
			</datalist>
	</div>
	<div id="text">
		<input type="text" size=40px name="sub" placeholder="Subject" title="Subject" required>
		<img src="icon\u.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="detl" placeholder="Details" title="Details" required>
		<img src="icon\u.png">
	</div>
	<div id="text">
		<input type="text" size=40px name="rev" placeholder="Review" title="Review" required>
		<img src="icon\u.png">
	</div>
	
	
</div>

<div id="form">
	<input class="boxbtn" type="submit" value="Submit">
</div>

</form>

<script type="text/javascript">
	
	
	function valdt_nam(){
	
		nameval=document.frm.name.value;
		if (/^[a-zA-Z ][a-zA-Z ._\-]*$/.exec(nameval)) {
		
		}
		else{
		alert("Enter Valid name");
		document.frm.name.value="";
		}		
		console.log();
	}
	
	function valdt_mob(){
	
		nameval=document.frm.mob.value;
		
		if (/^\d{10}$/.test(nameval)) {
			
		}
		
	else{
	alert("Enter Valid number ");
		document.frm.mob.value="";}		
		console.log();
	}
		
</script>

</body>
</html>

