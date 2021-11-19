<?php

$husernameErr = $hpasswordErr = "";
$husername = $hpassword = "";
if (isset($_POST['husername']) && isset($_POST['hpassword'])) 
{
  require 'Controller/checkloginData.php';
	if ($_POST['husername']==$husername && $_POST['hpassword']==$hpassword) 
  {
		$_SESSION['husername'] = $husername;
    $_SESSION['hpassword'] = $hpassword;
    $fetch = getID(	$_SESSION['husername'],$_SESSION['hpassword']);
    $_SESSION['hid']=$fetch[0];
    if(isset($_POST['remember_me']))
    {
    $time = time();
    setcookie('husername', $husername, $time+360);
    setcookie('hpassword', $_POST['hpassword'], $time+360);
    }
    header("location:welcome.php");
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["husername"])) 
  {
    $husernameErr = "Hospital user name is required";
  } 
  else 
  {
    $husername = test_input($_POST["husername"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$husername))
    {
      $husernameErr = "Only letters, white space, period, dash allowed";
      $husername="";
    }
    else if (str_word_count($husername)<2 ) 
    {
      $husernameErr = "Minimum two words";
      $husername="";
    } 
    else if($_POST['husername']!=$husername) 
    {
      $husernameErr = "User name Invalid "; 
      $husername="";
    }
  }

  if (empty($_POST["hpassword"])) 
  {
    $hpasswordErr = "Password is required";
  } 
  else 
  {
    $hpassword = test_input($_POST["hpassword"]);
    if (strlen($hpassword) <= 8)
    {
      $hpasswordErr = "Must be atleast 8 characters";
      $hpassword="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$hpassword)) 
    {
      $hpasswordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $hpassword ="";
    } 
    else if($_POST['hpassword']!=$hpassword) 
    {
      $hpasswordErr = "Password Invalid "; 
      $hpassword ="";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>