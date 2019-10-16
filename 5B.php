<?php
	$degree= $_POST['option'];
	 if(empty($degree))

  {

    echo("");

  }
  else

  {

    $N = count($degree);

    
  }


	


?>
<html>
<head>
	<title></title>
</head>
<body>

		<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="POST">  
	
<fieldset>
			<legend>DEGREE</legend>
		<input type="checkbox" value = "SSC" name="option[]">SSC
		<input type="checkbox" value = "HSC" name="option[]">HSC
		<input type="checkbox" value = "BSc" name="option[]">BSc
		<input type="checkbox" value = "MSc" name="option[]">MSc
				<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	
	</form>
	<label> <?php for($i=0; $i < $N; $i++){ echo($degree[$i] . " ");} ?> </label> <br>
</body>
</html>

		