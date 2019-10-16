<?php
$_email = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['email'])){
		$_email = "";
	}
	else{
		$_email = $_POST['email'];
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
			<legend>EMAIL</legend>
			
		<input type="text" name="email"><br> <br>
		
		<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
	<label><?php echo $_email; ?></label><br>
</body>
</html>

		