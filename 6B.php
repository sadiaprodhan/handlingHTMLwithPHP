<?php
$_bloodgroup = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['bloodgroup'])){
		$_bloodgroup = "";
	}
	else{
		$_bloodgroup = $_POST['bloodgroup'];
	}
}
	


?>
<html>
<head>
	<title></title>
</head>
<body>

		<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="POST">  
	
<fieldset>
	<legend>BLOOD GROUP</legend>
			
		<select name="bloodgroup">
							<option></option>
							<option value = "O+">O+</option>
							<option value = "O-">O-</option>
							<option value = "A+">A+</option>
							<option value = "B+">B+</option>
							<option value = "A-">A-</option>
							<option value = "AB+">AB+</option>
							<option value = "AB-">AB-</option>
							<option value = "B-">B-</option>
							
						
						</select>
						<hr> </hr>	
						<input type="submit" name="submit" value="Submit"> <br>
	
			</form>
	<label><?php echo $_bloodgroup; ?></label><br>
</body>
</html>

		