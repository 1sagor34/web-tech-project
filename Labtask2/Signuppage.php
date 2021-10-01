<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
	$nameErr = $divisionErr= $dateErr= $HospitalIDErr=$HospitaldistrictErr= $HospitalwardErr= $HospitalthanaErr= $HospitalunionErr="";
	$name = $division= $date=$HospitalID=$Hospitaldistrict=$Hospitalward= $Hospitalthana=$Hospitalunion="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	   
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$name)) {
	      $nameErr = "Only numbers letters and white space allowed";
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

	  if (empty($_POST["Hospitaldistrict"])) {
	    $HospitaldistrictErr = "Hospital's district name is required";
	  } else {
	    $Hospitaldistrict = test_input($_POST["Hospitaldistrict"]);
	    
	    if (!preg_match("/^[a-zA-Z-']*$/",$Hospitaldistrict)) {
	      $HospitaldistrictErr = "Only letters is allowed";
	    }
	  }

	  if (empty($_POST["Hospitalward"])) {
	    $HospitalwardErr = "Hospital's Id is required";
	  } else {
	    $Hospitalward = test_input($_POST["Hospitalward"]);
	    
	    if (!preg_match("/^[1-9]*$/",$Hospitalward)) {
	      $HospitalwardErr = "Only numbers allowed";
	    }
	  }
      
	  if (empty($_POST["Hospitalunion"])) {
	    $HospitalunionErr = "Hospital's district name is required";
	  } else {
	    $Hospitalunion = test_input($_POST["Hospitalunion"]);
	    
	    if (!preg_match("/^[a-zA-Z-']*$/",$Hospitalunion)) {
	      $HospitalunionErr = "Only letters is allowed";
	    }
	  }


	  if (empty($_POST["Hospitalthana"])) {
	    $HospitalthanaErr = "Hospital's district name is required";
	  } else {
	    $Hospitalthana = test_input($_POST["Hospitalthana"]);
	    
	    if (!preg_match("/^[a-zA-Z-']*$/",$Hospitalthana)) {
	      $HospitalthanaErr = "Only letters is allowed";
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


	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 <fieldset>
		 <legend style="font-size:19px" ><span class="tct">*Hospital's information:</span></legend>
	 <span class="tct" >
             <h2>Please enter the hospital information</h2>
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
		Hospital's district: <input type="text" name="Hospitaldistrict">
		<span class="err">*
	 		<?php echo $HospitaldistrictErr;?>
	 	</span>
		<br><br>
		Hospital's ward number: <input type="number" name="Hospitalward">
		<span class="err">*
	 		<?php echo $HospitalwardErr;?>
	 	</span>
		<br><br>

		Hospital's union: <input type="text" name="Hospitalunion">
		<span class="err">*
	 		<?php echo $HospitalunionErr;?>
	 	</span>
		<br><br>
		Hospital's thana: <input type="text" name="Hospitalthana">
		<span class="err">*
	 		<?php echo $HospitalthanaErr;?>
	 	</span>
		<br><br>


	 	<input type="submit" value="Submit">
     </fieldset>
	 </form>

	 <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name . "<br>";
	 	echo $division . "<br>";
		echo $date . "<br>";
		echo $HospitalID . "<br>";
        echo $Hospitaldistrict . "<br>";
		echo $Hospitalward . "<br>";
        echo $Hospitalunion . "<br>";
		echo $Hospitalthana . "<br>";

	  ?>
</body>
</html>