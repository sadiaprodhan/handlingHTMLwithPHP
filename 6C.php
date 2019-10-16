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
							<option  value = "O+" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="O+")) echo "selected"; ?>>O+</option>
							<option value = "O-" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="O-")) echo "selected"; ?>>O-</option>
							<option value = "A+" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="A+")) echo "selected"; ?>>A+</option>
							<option value = "B+" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="B+")) echo "selected"; ?>>B+</option>
							<option value = "A-" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="A-")) echo "selected"; ?>>A-</option>
							<option value = "AB+" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="AB+")) echo "selected"; ?>>AB+</option>
							<option value = "AB-" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="AB-")) echo "selected"; ?>>AB-</option>
							<option value = "B-" <?php if(isset($_POST['bloodgroup']) && ($_POST['bloodgroup']=="B-")) echo "selected"; ?>>B-</option>
							
						
						</select>
						<hr> </hr>	
						<input type="submit" name="submit" value="Submit"> <br>
	
			</form>
	<label><?php echo $_bloodgroup; ?></label><br>
</body>
</html>

		