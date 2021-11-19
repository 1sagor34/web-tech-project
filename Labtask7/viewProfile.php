<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['husername'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Name of hospital              :   <?php echo $hname ?></p><hr>
  <p>User name of hospital         :   <?php echo $husername ?></p><hr>
  <p>Password of hospital          :   <?php echo $hpassword?></p><hr>
  <p>Email of hospital             :   <?php echo $hemail ?></p><hr>
  <p>Hospital location             :   <?php echo $hlocation ?></p><hr>
  <p>Hospital phone number         :   <?php echo $hphone ?></p><hr>
  <p>Hospital established date     :   <?php echo $hedate ?></p><hr>
  <p>Hospital  government id       :   <?php echo $hosid ?></p><hr>
  <p>Hospital ICU seat number      :   <?php echo $hicuseatno ?></p><hr>
  <p>Hospital ward number          :   <?php echo $hoswno ?></p><hr>
  <p>Hospital seat number          :   <?php echo $hosnoseat ?></p><hr>
  <p>Hospital cabin number         :   <?php echo $hcabinno ?></p><hr>
  <p>Hospital ward number          :   <?php echo $hoswno ?></p><hr>
</div> 

<div class="justRight">
  <img class="proPic" 
  src="Uploads/<?php 
  if ($image!=null){echo $image; $_SESSION['pic']=$image;} 
  else{echo "pic.png";}
  ?>" alt="Profile Picture"> 
  <div class="textCenter"> <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<a href="editProfile.php" class="btn btn-info">Edit Profile</a><br><br>
<a href="changePassword.php" class="btn btn-info">Change Password</a>
<br><br><br><br><br><br><br><br><br>
</fieldset> 
</div>


<?php require 'Bar/footer.php';?>
</body>  
</html> 