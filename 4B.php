<?php
$_gender = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['gender'])){
		$_gender = "";
	}
	else{
		$_gender = $_POST['gender'];
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
			<legend>Gender</legend>
		<input type="radio"  value= "Male" name="gender"/> Male
		<input type="radio" value= "Female" name="gender"/> Female 
		<input type="radio" value= "Other" name="gender"/> Other
				<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	
	</form>
	<label><?php echo $_gender; ?></label><br>
</body>
</html>

		