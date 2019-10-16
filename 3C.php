<?php
$_dd = $_mm= $_yyyy = "";
$count= 0;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['dd']))
	{
		$_dd = "";
	}
	else{
		$_dd = $_POST['dd'];
		$count=1;
	}
	if(empty($_POST['mm'])){
		$_mm = "";
	}
	else{
		$_mm = $_POST['mm'];
		$count=1;
	}
	
	if(empty($_POST['yyyy'])){
		$_yyyy = "";
	}
	else{
		$_yyyy = $_POST['yyyy'];
		$count=1;
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
			<legend> <b>DATE OF BIRTH</b></legend>
			<table border="0">
				<tr>
					<td>dd </td>
					<td>mm</td>
					<td>yyyy</td>
				</tr>
				<tr>
					<td> <input type = "text" name= "dd" value= "<?php echo $_dd; ?>"> / </td>
					<td><input type = "text" name= "mm" value= "<?php echo $_mm; ?>"> /</td>
					<td><input type = "text" name= "yyyy"value= "<?php echo $_yyyy; ?>"> </td>
				</tr>
			</table>
		<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	<label><?php 
	if($count ==1)
	{echo $_dd."/".$_mm."/".$_yyyy;}
else{echo"";}?></label><br>
</body>
</html>

		