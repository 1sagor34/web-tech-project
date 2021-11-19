<!DOCTYPE html>  
<html>  
<head>  
<title>Signup</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['husername'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>Hospital registration form</legend>                 
  <form method="post"> 
  <label for="hname">Name of hospital :</label>
  <input type="text" id="hname" name="hname">
  <span class="error"> <?php echo $hnameErr;?></span><hr>

  <label for="husername">Username for hospital :</label>
  <input type="text" id="husername" name="husername">
  <span class="error"> <?php echo $hnameuserErr;?></span><hr>

  <label for="hpassword">Password for hospital :</label>
  <input type="password" id="hpassword" name="hpassword">
  <span class="error"> <?php echo $hpasswordErr;?></span><hr>

  <label for="hconfirm_password">Enter the password again:</label>
  <input type="password" id="hconfirm_password" name="hconfirm_password">
  <span class="error"> <?php echo $hconfirm_passwordErr;?></span><hr>


  <label for="hemail">Hospital for email:</label>
  <input type="text" id="hemail" name="hemail">
  <span class="error"> <?php echo $hemailErr;?></span><hr>

  <label for="hlocation">Location of the hospital :</label>
  <input type="text" id="hlocation" name="hlocation">
  <span class="error"> <?php echo $hlocationErr;?></span><hr>

  <label for="hphone">Hospital phone number:</label>
  <input type="tel" id="hphone" name="hphone" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $hphoneErr;?></span><hr>

  
<fieldset>
  <legend>Established date for hospital</legend>
  <input type="date" name="hedate"> 
  <span class="error"> <?php echo $hedateErr;?></span>
</fieldset><hr>

<label for="hosid">Hospital registration ID :</label>
  <input type="number" id="hosid" name="hosid">
  <span class="error"> <?php echo $hosidErr;?></span><hr>

  <label for="hicuseatno">Hospital ICU seat number:</label>
  <input type="number" id="hicuseatno" name="hicuseatno">
  <span class="error"> <?php echo $hicuseatnoErr;?></span><hr>

  <label for="hoswno">Hospital ward number:</label>
  <input type="number" id="hoswno" name="hoswno">
  <span class="error"> <?php echo $hoswnoErr;?></span><hr>

  <label for="hosnoseatd">Hospital seat number:</label>
  <input type="number" id="hosnoseat" name="hosnoseat">
  <span class="error"> <?php echo $hosnoseatErr;?></span><hr>


  <label for="hcabinno">Hospital cabin number:</label>
  <input type="number" id="hcabinno" name="hcabinno">
  <span class="error"> <?php echo $hcabinnoErr;?></span><hr>

  <fieldset>
   Oxygen availability:
  <select name="hoxav">
  <option></option>
  <option name="hoxav" <?php if (isset($hoxav) && $hoxav=="Yes") echo "checked";?> value="Yes">Yes</option>
  <option name="hoxav" <?php if (isset($hoxav) && $hoxav=="No") echo "checked";?> value="No">No</option>
  </select>
  <span class="error"> <?php echo $hoxavErr;?></span>
 </fieldset><hr>
 <input type="submit" name="submit" value="Signup" class="btn btn-info"><br><br>
 <input type="submit" name="reset" value="Reset" class="btn btn-info"><br><br><br><br><br>

</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  