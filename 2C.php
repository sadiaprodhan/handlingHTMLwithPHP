<?php
$_emailname = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['email'])){
		$_emailname = "";
	}
	else{
		$_emailname = $_POST['email'];
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
			
		<input type="text" name="email" value ="<?php echo $_emailname; ?>"> <br> <br>
		
		<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
	<label><?php echo $_emailname; ?></label><br>
</body>
</html>

		