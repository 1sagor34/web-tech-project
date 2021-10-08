<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
	<style type="text/css">
      .tct{
		  color: green;
	  }
	
	</style>
</head>
<body>

	<?php

	// define variables and set to empty values
	$nameErr = $divisionErr= $dateErr= $HospitalIDErr=$HospitallocationErr= $HospitalseatnoErr=$oxygenavErr= $HospitalwardnoErr="";
	$name = $division= $date=$HospitalID=$Hospitallocation= $Hospitalseatno= $oxygenav= $Hospitalwardno="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	   
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$name)) {
	      $nameErr = "Only numbers letters, numbers and white space allowed";
	    }
	  }
	  if (empty($_POST["division"])) {
	    $divisionErr = "Select the division of the hospital";
	  } else {
	    $division = test_input($_POST["division"]);
	  }
	  if (empty($_POST["date"])) {
	    $dateErr = "Select establishment date of the hospital";
	  } else {
	    $date = test_input($_POST["date"]);
	  }
	  if (empty($_POST["HospitalID"])) {
	    $HospitalIDErr = "Hospital's Id is required";
	  } else {
	    $HospitalID = test_input($_POST["HospitalID"]);
	    
	    if (!preg_match("/^[1-9]*$/",$HospitalID)) {
	      $HospitalIDErr = "Only numbers allowed";
	    }
	  }

	  if (empty($_POST["Hospitallocation"])) {
	    $HospitallocationErr = "Hospital's location name is required";
	  } else {
	    $Hospitallocation = test_input($_POST["Hospitaldistrict"]);
	    
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$Hospitallocation)) {
	      $HospitallocationErr = "Only letters, numbers and white space is allowed";
	    }
	  }

	  if (empty($_POST["Hospitalseatno"])) {
	    $HospitalseatnoErr = "Hospital's seat number is required";
	  } else {
	    $Hospitalseatno = test_input($_POST["Hospitalseatno"]);
	    
	    if (!preg_match("/^[1-9]*$/",$Hospitalseatno)) {
	      $HospitalseatnoErr = "Only numbers allowed";
	    }
	  }

	  if (empty($_POST["oxygenav"])) 
	  {
		$oxygenavErr = "Blood_Group is required";
	  } 
	  else 
	  {
		$oxygenav = test_input($_POST["oxygenav"]);
	  }
	  if (empty($_POST["Hospitalwardno"])) {
	    $HospitalwardnoErr = "Hospital's ward number is required";
	  } else {
	    $Hospitalwardno = test_input($_POST["Hospitalwardno"]);
	    
	    if (!preg_match("/^[1-9]*$/",$Hospitalwardno)) {
	      $HospitalwardnoErr = "Only numbers allowed";
	    }
	  }
	  


	  
	}


	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



?>
       <div class="container" style="width:500px;"> 

	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 <fieldset>
		 <legend style="font-size:19px" ><span class="tct">*Hospital's information:</span></legend>
	 <span class="tct" >
             <h3>Please enter the hospital information</h3>
	 </span>
	 	
	 	Hospital's name: <input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span><br><br>
		 Hospital's division:
		<input type="radio" name="division" value="Dhaka">Dhaka
		<input type="radio" name="division" value="Rajshahi">Rajshahi
		<input type="radio" name="division" value="Khulna">Khulna
        <input type="radio" name="division" value="Rangpur">Rangpur
		<input type="radio" name="division" value="Chittagong">Chittagong
        <input type="radio" name="division" value="Sylhet">Sylhet
        <input type="radio" name="division" value="Barishal">Barishal
		<input type="radio" name="division" value="Mymensingh">Mymensingh

		<span class="err">*
	 		<?php echo $divisionErr;?>
	 	</span>
		<br><br>

		Hospital' establishment date: <input type="date" name="date">
		<span class="err">*
	 		<?php echo $dateErr;?>
	 	</span>
		<br><br>
		Hospital's ID: <input type="number" name="HospitalID">
		<span class="err">*
	 		<?php echo $HospitalIDErr;?>
	 	</span>
		<br><br>
		Hospital's location: <input type="text" name="Hospitaldistrict">
		<span class="err">*
	 		<?php echo $HospitallocationErr;?>
	 	</span>
		<br><br>

		Hospital's seat number: <input type="number" name="Hospitaldistrict">
		<span class="err">*
	 		<?php echo $HospitallocationErr;?>
	 	</span>
		<br><br>
		Oxygen availability:
        <select name="oxygenav">
        <option></option>
        <option name="oxygenav" <?php if (isset($oxygenav) && $oxygenav=="Yes") echo "checked";?> value="Yes">Yes</option>
        <option name="oxygenav" <?php if (isset($oxygenav) && $oxygenav=="No") echo "checked";?> value="No">No</option>
        </select>
		<span class="err">*
	 		<?php echo $oxygenavErr;?>
	 	</span>
		<br><br>
		Hospital's waard number: <input type="number" name="Hospitaldistrict">
		<span class="err">*
	 		<?php echo $HospitalwardnoErr;?>
	 	</span>
		<br><br>
		



	 	<input type="submit" name="submit" value="Signup" class="btn btn-info"/><br><br>
        </fieldset>
	    </form>

	 
</body>
</html>