<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/Hospital_Signup.js"></script>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['husername'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'controller/loginCheck.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" >
 <fieldset>
  <legend>LOGIN</legend>

  <label for="husername">User name :</label>
  <input type="text" id="husername" name="husername" onkeyup="checkusername()" onblur="checkusername()" value="<?php if(isset($_COOKIE['husername'])){echo $_COOKIE['husername'];} ?>">
  <span class="error" id="husernameErr"> <?php echo $husernameErr;?></span>
  <br><br>

  <label for="hpassword">Password :</label>
  <input type="password" id="hpassword" name="hpassword" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($_COOKIE['hpassword'])){echo $_COOKIE['hpassword'];} ?>">
  <span class="error" id="hpasswordErr"> <?php echo $hpasswordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit" class="btn btn-info"><br> <br><a href="forgotPassword.php" class="btn btn-info">Forgot Password?</a>

 </fieldset>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>