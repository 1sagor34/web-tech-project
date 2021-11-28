<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/Hospital_Signup.js"></script>
<script src="JS/duplication.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['husername'])){require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/editshowData.php';
require 'Controller/editstoreData.php';
?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
  <form method="post"> 
  <label for="hname">Name of hospital :</label>
  <input type="text" id="hname" name="hname" onkeyup="checkName()" onblur="checkName()" value="<?php echo $hname ?>">
  <span class="error" id="hnameErr"> <?php echo $hnameErr;?></span><hr>

  <label for="husername">Username for hospital :</label>
  <input type="text" id="husername" name="husername" onkeyup="showUser_name(this.value)" onblur="checkusername()" value="<?php echo $husername ?>">
  <span class="error" id="husernameErr"> <?php echo $hnameuserErr;?></span><hr>
  <div id="txtHint_2"><b>Person username info will be listed here...</b></div>

  <label for="hpassword">Password for hospital :</label>
  <input type="password" id="hpassword" name="hpassword" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $hpassword ?>">
  <span class="error" id="hpasswordErr"> <?php echo $hpasswordErr;?></span><hr>

  <label for="hconfirm_password">Enter the password again:</label>
  <input type="password" id="hconfirm_password" name="hconfirm_password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()" value="<?php echo $hconfirm_passwordErr ?>">
  <span class="error" id="hconfirm_passwordErr"> <?php echo $hconfirm_passwordErr;?></span><hr>


  <label for="hemail">Hospital for email:</label>
  <input type="text" id="hemail" name="hemail" onkeyup="showUser(this.value)" onblur="checkEmail()" value="<?php echo $hemail ?>">
  <span class="error" id="hemailErr"> <?php echo $hemailErr;?></span><hr>
  <div id="txtHint"><b>Person email info will be listed here...</b></div>

  <label for="hlocation">Location of the hospital :</label>
  <input type="text" id="hlocation" name="hlocation" onkeyup="checklocation()" onblur="checklocation()" value="<?php echo $hlocation ?>">
  <span class="error" id="hlocationErr"> <?php echo $hlocationErr;?></span><hr>


  <label for="hphone">Hospital phone number:</label>
  <input type="tel" id="hphone" name="hphone" pattern="[0-9]{3}[0-9]{8}" onkeyup="showUser_phonenumber(this.value)" onblur="checkPhoneNumber()" value="<?php echo $hphone ?>">
  <span class="error" id="hphoneErr"> <?php echo $hphoneErr;?></span><hr>
  <div id="txtHint_3"><b>Hospital phone number will be listed here...</b></div>

  
<fieldset>
  <legend>Established date for hospital</legend>
  <input type="date" name="hedate" onkeyup="checkhedate()" onblur="checkhedate()" value="<?php echo $hedate?>"> 
  <span class="error" id="hedateErr"> <?php echo $hedateErr;?></span>
</fieldset><hr>

<label for="hosid">Hospital registration ID :</label>
  <input type="number" id="hosid" name="hosid" onkeyup="showUser_hospistalid(this.value)" onblur="checkregistrationid()" value="<?php echo $hosid?>">
  <span class="error" id="hosidErr"> <?php echo $hosidErr;?></span><hr>
  <div id="txtHint_4"><b>Hospital id info will be listed here...</b></div>

  <label for="hicuseatno">Hospital ICU seat number:</label>
  <input type="number" id="hicuseatno" name="hicuseatno" onkeyup="checkicuseat()" onblur="checkicuseat()" value="<?php echo $hicuseatno?>">
  <span class="error" id="hicuseatnoErr"> <?php echo $hicuseatnoErr;?></span><hr>

  <label for="hoswno">Hospital ward number:</label>
  <input type="number" id="hoswno" name="hoswno" onkeyup="checkwardnumber()" onblur="checkwardnumber()" value="<?php echo $hoswno ?>">
  <span class="error" id="hoswnoErr"> <?php echo $hoswnoErr;?></span><hr>

  <label for="hosnoseat">Hospital seat number:</label>
  <input type="number" id="hosnoseat" name="hosnoseat" onkeyup="checkseatnumber()" onblur="checkseatnumber()" value="<?php echo $hosnoseat ?>">
  <span class="error" id="hosnoseatErr"> <?php echo $hosnoseatErr;?></span><hr>


  <label for="hcabinno">Hospital cabin number:</label>
  <input type="number" id="hcabinno" name="hcabinno" onkeyup="checkcabinnumber()" onblur="checkcabinnumber()" value="<?php echo $hcabinno ?>">
  <span class="error" id="hcabinnoErr"> <?php echo $hcabinnoErr;?></span><hr>

  <fieldset>
   Oxygen availability:
  <select name="hoxav" id="hoxav" onkeyup="checkoxygenavailability()" onblur="checkoxygenavailability()">
  <option></option>
  <option name="hoxav" <?php if (isset($hoxav) && $hoxav=="Yes") echo "checked";?> value="Yes">Yes</option>
  <option name="hoxav" <?php if (isset($hoxav) && $hoxav=="No") echo "checked";?> value="No">No</option>
  </select>
  <span class="error"> <?php echo $hoxavErr;?></span>
 </fieldset><hr>
 <input type="submit" name="submit" value="Confirm" class="btn btn-info"><br><br>
 <input type="submit" name="reset" value="Reset" class="btn btn-info"><br><br><br><br><br>

</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  