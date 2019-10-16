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
		<input type="radio"  value= "Male" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="Male")) echo "checked" ?> name="gender"/> Male
		<input type="radio" value= "Female" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="Female")) echo "checked" ?> name="gender"/> Female 
		<input type="radio" value= "Other" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="Other")) echo "checked" ?> name="gender"/> Other
				<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	
	</form>
	<label><?php echo $_gender; ?></label><br>
</body>
</html>

		