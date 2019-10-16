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
  function IsChecked($chkname,$value)

    {

        if(!empty($_POST[$chkname]))
        {

            foreach($_POST[$chkname] as $chkval)

            {

                if($chkval == $value)

                {

                    return true;

                }

            }

        }

        return false;

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
			<input type="checkbox" value = "SSC" <?php if(in_array("SSC",$_POST['option'])) {echo "checked";} ?>  name="option[]">SSC
			<input type="checkbox" value = "HSC" <?php if(in_array("HSC",$_POST['option'])) {echo "checked";} ?> name="option[]">HSC
		<input type="checkbox" value = "BSc" <?php if(in_array("BSc",$_POST['option'])) {echo "checked";} ?> name="option[]">BSc
		<input type="checkbox" value = "MSc" <?php if(in_array("MSc",$_POST['option'])) {echo "checked";} ?> name="option[]">MSc
				<hr> </hr>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	
	</form>
	<label>  <?php for($i=0; $i < $N; $i++){ echo($degree[$i] . " "); }?> </label> <br>
</body>
</html>

		